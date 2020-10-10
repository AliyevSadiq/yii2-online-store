<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{


   public function actionIndex(){
       $categories=Category::find()->asArray()->select('id,title')->
       with('products')->cache(60)->all();

       return $this->render('index',compact('categories'));

   }





    public function actionView($id){
        $category=Category::find()->select('title, description, keywords')->asArray()->cache(60)->where(['id'=>$id])->one();
        if(empty($category)){
            throw new NotFoundHttpException('THIS CATEGORY NOT FOUND');
        }
        $categories=Category::find()->asArray()->select('id, title')->
        with('subcategories')->
        where(['parent_id'=>'0'])->
        andWhere(['<>','id',$id])->limit(3)->all();

       parent::seoParams($category['title'],$category['description'],$category['keywords']);

        $model=Product::find()->select(['id','category_id','title','price','old_price',
            'img','is_offer'])->
        asArray()->where(['category_id'=>$id])->cache(60);


        $pages=new Pagination([
            'totalCount'=>$model->count(),'pageSize'=>1,
             'forcePageParam'=>false,
             'pageSizeParam'=>false,
            ]);
        $products=$model->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('view',compact('products','categories','pages'));
    }

}