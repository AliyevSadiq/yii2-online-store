<div class="banner">
    <?php echo $this->render('/layouts/inc/sidebar');?>
<div class="w3l_banner_nav_right">
    <div class="w3l_banner_nav_right_banner3">
        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
    </div>


    <div class="agileinfo_single">
        <h5><?php echo $product['title'];?></h5>
        <div class="col-md-4 agileinfo_single_left">
            <?php echo \yii\helpers\Html::img('/web/products/'.$product['img'],
            ['alt'=>$product['title'],'class'=>'img-responsive','id'=>'example']
            )?>

        </div>
        <div class="col-md-8 agileinfo_single_right">

            <div class="w3agile_description">
                <h4>Description :</h4>
                <p><?php echo $product['content'];?></p>
            </div>
            <div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                    <h4>$<?php echo $product['price'];?>
                        <?php if((float) $product['old_price']){?>
                        <span>$<?php echo $product['old_price'];?></span></h4>
                    <?php }?>
                </div>
                <div class="snipcart-details agileinfo_single_right_details">
                    <a href="<?php echo \yii\helpers\Url::to(['cart/add','id'=>$product['id']]);?>" class="button add-to-cart"
                       data-id="<?php echo $product['id']?>">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    </div>
    <div class="clearfix"></div>
</div>

<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
    <div class="container">
        <h3>Popular Brands</h3>
        <?php if(!empty($categories)){
            foreach ($categories as $category){
            if(!empty($category['products'])){?>
        <div class="w3ls_w3l_banner_nav_right_grid1">
            <a href="<?php echo \yii\helpers\Url::to(['category/view','id'=>$category['id']]);?>">
                <h6><?php echo $category['title'];?></h6>
            </a>
            <?php

                echo  \app\components\widgets\ProductListWidget::widget(
                        ['data'=>$category['products'],
                         'template'=>'all-product-list'
                        ]);

            ?>
        </div>
                <div class="clearfix"></div>
        <?php }}}?>
    </div>
    </div>

