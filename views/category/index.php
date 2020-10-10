<div class="w3l_banner_nav_right">
    <div class="w3l_banner_nav_right_banner3">
        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
    </div>
    <div class="w3ls_w3l_banner_nav_right_grid">
        <h3>Popular Brands</h3>
    <?php if(!empty($categories)){
        foreach ($categories as $category){
            if(!empty($category['products'])){

                ?>

        <div class="w3ls_w3l_banner_nav_right_grid1">
            <h6><?php echo $category['title'];?></h6>
            <?php echo \app\components\widgets\ProductListWidget::widget(['template'=>'all-product-list','data'=>$category['products']])?>
        </div>
                <div class="clearfix"></div>
                <?
            }
        }
        ?>

    <?php }?>
</div>
</div>

