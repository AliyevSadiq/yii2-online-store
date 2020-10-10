<?php
use yii\helpers\Html;
use \yii\helpers\Url;
/** @var \app\models\Product $products */
/** @var string $title */
?>
<div class="top-brands">
    <div class="container">
        <h3><?php
            echo Html::encode($title);?></h3>
        <div class="agile_top_brands_grids">
            <?php
            foreach ($products as $product){?>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <?php if(!empty($product['is_offer'])){?>
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <?php }?>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="<?php echo Url::to(['product/view','id'=>$product['id']]);?>">
                                                <?php echo Html::img("/web/products/".$product['img'],
                                                    ['alt'=>$product['title'],'class'=>'img-responsive'])?>
                                            </a>
                                            <a href="<?php echo Url::to(['product/view','id'=>$product['id']]);?>">
                                            <p><?php echo $product['title'];?></p>
                                            </a>
                                            <h4>$<?php echo $product['price'];?>
                                                <?php if((float) $product['old_price']){?>
                                                    <span><?php echo $product['old_price'];?></span>
                                                <?php }?>
                                            </h4>


                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <a href="<?php echo Url::to(['cart/add','id'=>$product['id']]);?>" class="button add-to-cart"
                                               data-id="<?php echo $product['id']?>">Add to cart</a>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } if($pages){?>
            <div class="clearfix"> </div>
            <div class="col-md-12">
            <?php echo \yii\widgets\LinkPager::widget(['pagination'=>$pages]);?>
        </div>
            <?php }?>
        </div>
    </div>
</div>
