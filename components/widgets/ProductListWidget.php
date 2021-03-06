<?php


namespace app\components\widgets;


use yii\base\Widget;

class ProductListWidget extends Widget
{

    public $title;
    public $data;
    public $pages;
    public $template;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if($this->template===null){
            $this->template='selected-product-list';
        }
    }

    public function run()
    {
        return $this->render($this->template,['products'=>$this->data,'title'=>$this->title,'pages'=>$this->pages]);
    }

}