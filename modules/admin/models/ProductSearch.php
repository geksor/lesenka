<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'old_price', 'weight', 'weight_unit_id', 'item_unit_id', 'pub_status'], 'integer'],
            [['name', 'alias', 'short_description', 'description', 'image', 'creation_date', 'meta_title', 'meta_description', 'meta_keywords','categoryId'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $categoryId = null)
    {
        if(isset($categoryId)) {
            $query = Product::find()
                ->orderBy(['id' => SORT_DESC])
                ->innerJoinWith('categories')
                ->where(['pub_status' => true, 'category_id' => $categoryId]);
            if($categoryId == 'all'){
                $query = Product::find()->orderBy(['id' => SORT_DESC]);
            }
        }else{
            $query = Product::find()->orderBy(['id' => SORT_DESC]);
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'products.id' => $this->id,
            'products.price' => $this->price,
            'products.old_price' => $this->old_price,
            'products.weight' => $this->weight,
            'products.weight_unit_id' => $this->weight_unit_id,
            'products.item_unit_id' => $this->item_unit_id,
            'products.pub_status' => $this->pub_status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'short_description', $this->short_description])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'creation_date', $this->creation_date])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords]);

        return $dataProvider;
    }
}
