<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `app\modules\admin\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'user_floor', 'user_flat', 'order_sum'], 'integer'],
            [['user_name', 'user_phone', 'user_email', 'order_message', 'user_street', 'user_house', 'user_part', 'order_date', 'products'], 'safe'],
            [['viewed'],'safe']
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
    public function search($params)
    {
        $query = Orders::find()->orderBy(['id' => SORT_DESC]);

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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_floor' => $this->user_floor,
            'user_flat' => $this->user_flat,
            'order_sum' => $this->order_sum,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_phone', $this->user_phone])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'order_message', $this->order_message])
            ->andFilterWhere(['like', 'user_street', $this->user_street])
            ->andFilterWhere(['like', 'user_house', $this->user_house])
            ->andFilterWhere(['like', 'user_part', $this->user_part])
            ->andFilterWhere(['like', 'order_date', $this->order_date])
            ->andFilterWhere(['like', 'products', $this->products]);

        return $dataProvider;
    }
}
