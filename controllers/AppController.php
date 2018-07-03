<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function setPageTitle($page_title){
        return $page_title;
    }
    public function setMetaTags($title = null, $description = null,$keywords = null){
        $this->view->title = "Лесенка знаний в Ставрополе - $title";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "Saloon - $description"]);
    }
}