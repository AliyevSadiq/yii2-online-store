<?php


namespace app\controllers;


use app\models\Product;

class HomeController extends AppController
{

    public $layout='home';

    public function actionIndex(){

        $offers=Product::find()->select(['id','title','price','old_price',
            'img','is_offer'])->asArray()->where(['is_offer'=>'1'])->orderBy('id asc')->
        limit(4)->all();


        return $this->render('index',compact('offers'));
    }



}