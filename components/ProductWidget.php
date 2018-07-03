<?php

namespace app\components;


use yii\base\Widget;
use app\models\Product;
use yii\data\Pagination;


class ProductWidget extends Widget
{
    public $template;
    public $data;
    public $categoryId;
    public $search;

    public function init(){
        parent::init();
        if($this->template === null){
            $this->template = 'default';
        }
        $this->template .= '.php';
    }
    public function run(){
        if(isset($this->categoryId)) {
            $products = Product::getDb()->cache(function ($db) {
                $this->data = Product::find()
                    ->innerJoinWith('categories')
                    ->with(['weight', 'unit'])
                    ->select('products.id,name,short_description,price,weight as weight_value,image,weight_unit_id,item_unit_id')
                    ->where(['pub_status' => true, 'category_id' => $this->categoryId]);

                $pages = new Pagination(['totalCount' => $this->data->count(), 'pageSize' => 8, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $products = $this->data
                    ->offset($pages->offset)
                    ->limit($pages->limit)
                    ->orderBy(['id' => SORT_DESC])
                    ->asArray()
                    ->all();
                return ['products' => $products, 'pages' => $pages];
            });
        }

        if(isset($this->search)){
            $products = Product::getDb()->cache(function ($db) {
                $this->data = Product::find()
                    ->with(['weight', 'unit'])
                    ->select('products.id,name,short_description,price,weight as weight_value,image,weight_unit_id,item_unit_id')
                    ->where(['pub_status' => true])
                    ->andWhere(['like','name',$this->search]);
                $pages = new Pagination(['totalCount' => $this->data->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $products = $this->data
                    ->offset($pages->offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();
                return ['products' => $products, 'pages' => $pages];
            });
        }
        ob_start();
        include __DIR__ . '/product_tpl/' . $this->template;
        return ob_get_clean();
    }
}