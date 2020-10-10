<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{

    public function actionView($id){
        $this->layout='detail';
        $product=Product::find()->asArray()->
        select('id,title,img,content,description,keywords,price,old_price')->cache(60)->
        where(['id'=>$id])->one();
        if(empty($product)){
            throw  new NotFoundHttpException('PRODUCT NOT FOUN!!!');
        }
        $categories=Category::find()->asArray()->select('id,title')->
        with('products')->cache(60)->all();
        $this->seoParams($product['title'],$product['description'],$product['keywords']);

        return $this->render('view',compact('product','categories'));
    }

    public function actionSearch($query){

             if(!$query){
                 throw new NotFoundHttpException('Not Found');
             }
        $model=Product::find()->asArray()->
        select('id,title,img,is_offer,price,old_price')->
        where(['like','title',$query])->cache(60);

        $pages=new Pagination(
            [
                'totalCount'=>$model->count(),
                'forcePageParam'=>false,
                'pageSizeParam'=>false,
                'pageSize'=>1
            ]);
        $products=$model->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('search',compact('products','pages'));
    }

}