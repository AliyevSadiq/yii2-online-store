<?php


namespace app\components\widgets;


use yii\base\Widget;

class CartButtonWidget extends Widget
{


    public function run()
    {
        return $this->render('cart-template');
    }

}