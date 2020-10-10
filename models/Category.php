<?php


namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }
    public function getProducts(){
        return $this->hasMany(Product::class,['category_id'=>'id'])
            ->select('id,title,category_id,price,old_price,is_offer,img');
    }

    public function getSubcategories(){
        return $this->hasMany(Category::class,['parent_id'=>'id'])
            ->select('id,title,parent_id');
    }
}