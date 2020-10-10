<?php
use yii\helpers\Url;
/** @var \app\models\Product $products */
?>

<div class="w3l_banner_nav_right">
    <div class="w3l_banner_nav_right_banner6">
        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
    </div>
    <?php

    if(!empty($categories)){?>
    <div class="w3l_banner_nav_right_banner3_btm">
        <?php foreach ($categories as $category){?>
        <div class="col-md-4 w3l_banner_nav_right_banner3_btml">

            <a href="<?php echo Url::to(['category/view','id'=>$category['id']]);?>">
                <h4><?php echo $category['title'];?></h4>
            </a>
               <?php if(!empty($category['subcategories'])){
                  // debug($category['subcategories']);?>
            <ol>
                <?php foreach ($category['subcategories'] as $subcat){
                    if(!in_array($_GET['id'],$subcat)){

                    ?>
                <a href="<?php echo Url::to(['category/view','id'=>$subcat['id']]);?>">
                    <li><?php echo $subcat['title'];?></li></a>
                <?php }}?>
            </ol>
            <?php }?>
        </div>
<?php }?>
        <div class="clearfix"> </div>
    </div>
   <?php }?>
</div>


<div class="clearfix"></div>
</div>

<?php
echo \app\components\widgets\ProductListWidget::widget([
        'title'=>'Popular Products','data'=>$products,'pages'=>$pages]);



?>