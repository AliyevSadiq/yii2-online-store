<?php


namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public $layout='grocery';
    public function beforeAction($action)
    {
        $this->view->title=\Yii::$app->name;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }


    public function seoParams($title,$description,$keyword){
        $this->view->title=$title;
        if(!empty($description)){
        $this->view->registerMetaTag(
            ['name'=>'description','content'=>$description]
        );
        }
        if(!empty($keyword)){
        $this->view->registerMetaTag(
            ['name'=>'keyword','content'=>$keyword]
        );
    }
    }



}