<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var \app\models\Product $products */


foreach ($products as $product){





?>
<div class="col-md-3 w3ls_w3l_banner_left">
    <div class="hover14 column">
        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">

            <?php if(!empty($product['is_offer'])){?>
            <div class="agile_top_brand_left_grid_pos">
                <img src="/images/offer.png" alt=" " class="img-responsive" />
            </div>
            <?php }?>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="<?php echo Url::to(['product/view','id'=>$product['id']])?>">
                                <?php echo Html::img('/web/products/'.$product['img'],
                                    ['alt'=>$product['title'],
                                     'class'=>'img-responsive'
                                        ])?>

                            </a>
                            <a href="<?php echo Url::to(['product/view','id'=>$product['id']])?>">
                                <p><?php echo $product['title'];?></p>
                            </a>
                            <h4>$<?php echo $product['price'];?>

                                <?php if((float) $product['old_price']){?>
                                <span>$<?php echo $product['old_price'];?></span>
                                 <?php }?>
                            </h4>
                        </div>
                        <div class="snipcart-details">
                            <a href="<?php echo Url::to(['cart/add','id'=>$product['id']]);?>" class="button add-to-cart"
                            data-id="<?php echo $product['id']?>">Add to cart</a>

                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
<?php }
if($pages){
    echo ' <div class="clearfix"> </div>
            <div class="col-md-12">';
    echo \yii\widgets\LinkPager::widget(['pagination'=>$pages]);
    echo '</div></div>';
}
?>
