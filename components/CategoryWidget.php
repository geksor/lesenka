<?php

namespace app\components;
use yii\base\Widget;
use app\models\Category;


class CategoryWidget extends Widget
{

    public $template;
    public $parent_id;
    public $active_id;
    public $data;
    public $tree;
    public $menuHtml;
    public $parent;
    public $limit;
    public $offset;

    public function init(){
        parent::init();
        if( $this->template === null ){
            $this->template = 'menu';
        }
        $this->template .= '.php';
    }

    public function run(){

        switch ($this->template){
            case 'menu.php':
                $this->data = Category::getDb()->cache(function ($db) {
                    $categories = Category::find()
                        ->select(['id', 'name', 'alias', 'parent_id'])
                        ->where(['pub_status' => '1'])
                        ->indexBy('id')
                        ->asArray()
                        ->all();
                    return $categories;
                });
                break;
            case 'block.php':
                $this->data = Category::getDb()->cache(function ($db) {
                    $categories = Category::find()
                    ->select(['id','name','alias','short_description','css_class','image','parent_id'])
                    ->where(['pub_status' => '1','parent_id' => null])
                    ->indexBy('id');
                        if(isset($this->limit)){
                            $categories = $categories->limit($this->limit);
                        }
                        if(isset($this->offset)){
                            $categories = $categories->offset($this->offset);
                        }
                    $categories = $categories->asArray()
                    ->all();
                    return $categories;
                });
                break;
            case 'left_menu.php':
                $this->data = Category::getDb()->cache(function ($db) {
                    $categories =  Category::find()
                        ->select(['id','name','alias','parent_id'])
                        ->with('products')
                        ->where(['pub_status' => '1'])
                        ->indexBy('id')
                        ->asArray()
                        ->all();
                    return $categories;
                });
        }

        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!isset($node['parent_id']))
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/category_tpl/' . $this->template;
        return ob_get_clean();
    }
}