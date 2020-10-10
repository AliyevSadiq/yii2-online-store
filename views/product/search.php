<?php
/** @var \app\models\Product $products */
/** @var \yii\data\Pagination $pages */

?><div class="w3l_banner_nav_right">
    <div class="w3l_banner_nav_right_banner3">
        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
    </div>
    <div class="w3ls_w3l_banner_nav_right_grid">
        <h3>Search Result</h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">

<?php
echo \app\components\widgets\ProductListWidget::widget(
        [
         'template'=>'all-product-list','data'=>$products,'pages'=>$pages
        ])?>


<div class="clearfix"></div>
      </div>
    </div>
</div>