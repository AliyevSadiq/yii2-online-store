<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/** @var \app\models\Order $order */


?>
<div class="w3l_banner_nav_right">
    <!-- about -->
    <div class="privacy about">
        <?php echo \app\widgets\Alert::widget();?>
        <h3>Chec<span>kout</span></h3>
        <?php if(!empty($session['cart'])): ?>
        <div class="checkout-right">
            <h4>Your shopping cart contains: <span><?php echo $session['cart.qty'];?> Products</span></h4>
            <div class="cart-table">
                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Product</th>
                    <th>Quality</th>
                    <th>Product Name</th>

                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                //debug($session['cart']);



                foreach ($session['cart'] as $key=>$item){
                ?>
                <tr class="rem1">
                    <td class="invert"><?php echo $i;?></td>
                    <td class="invert-image">
                        <a href="<?php echo Url::to(['product/view','id'=>$key])?>">
                            <?php echo Html::img('/web/products/'.$item['img'],
                                ['alt'=>$item['title'],'class'=>'img-responsive'])?>
                            </a></td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus" data-id="<?php echo $key;?>" data-qty="-1">&nbsp;</div>
                                <div class="entry value"><span><?php echo $item['qty'];?></span></div>
                                <div class="entry value-plus active" data-id="<?php echo $key;?>" data-qty="1">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert"><?php echo $item['title'];?></td>

                    <td class="invert">$<?php echo $item['price'];?></td>
                    <td class="invert">
                        <div class="rem">
                            <a class="close1" href="<?php echo Url::to(['cart/del-item','id'=>$key])?>"> </a>
                        </div>

                    </td>
                </tr>
                <?php $i++; }?>

                </tbody></table>
        </div>
        </div>
        <div class="checkout-left">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    <?php


                    foreach ($session['cart'] as $item){?>
                    <li><?php echo $item['title']?> <i>-</i> <span>$<?php echo $item['qty']*$item['price'];?> </span></li>
                    <?php }?>
                    <li>Total <i>-</i> <span>$<?php echo $session['cart.sum'];?></span></li>
                </ul>
            </div>
            <div class="col-md-8 address_form_agile">
                <h4>Details of Customer</h4>
                <?php
                $form=ActiveForm::begin();

                echo $form->field($order,'name');
                echo $form->field($order,'email');
                echo $form->field($order,'phone');
                echo $form->field($order,'address')->textarea(['rows'=>7]);
                echo $form->field($order,'note')->textarea(['rows'=>7]);
                echo Html::submitButton('Confirm order',['class'=>'submit check_out']);
                ActiveForm::end();
                ?>

            </div>

            <div class="clearfix"> </div>

        </div>
        <?php else: ?>
            <h3>Корзина пуста</h3>
        <?php endif;?>
    </div>
    <!-- //about -->
</div>
<div class="clearfix"></div>