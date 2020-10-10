<?php


namespace app\components\widgets;


use app\models\Category;
use yii\base\Widget;

class CategoryMenuWidget extends Widget
{
    public $template;
    public $data;
    public $tree;


    public function init()
    {
        parent::init();
       if($this->template===null){
           $this->template='all-category';
       }

    }

    public function run()
    {
        $this->data=Category::find()->select(['id','parent_id','title'])->
        indexBy('id')->asArray()->cache(60)->all();
        if($this->template=='all-category'){
            $this->tree=$this->getTree();
        }
        if($this->template=='main-category'){
            $this->tree=Category::find()->select(['id','parent_id','title'])->
            indexBy('id')->asArray()->cache(60)->where(['parent_id'=>0])->all();
        }
        return $this->render($this->template,['tree'=>$this->tree]);

    }
   protected function getTree(){
       $tree=[];
       foreach ($this->data as $id=>&$node){

           if(!$node['parent_id']) {
               $tree[$id] =&$node;

           }else {
               $this->data[$node['parent_id']]['children'][$node['id']] =&$node;
           }

       }
       return $tree;
   }

}