
<div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
    <div class="w3l_fresh_vegetables_grid2">
        <ul>

            <?php foreach ($tree as $item){?>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                <a href="<?php echo \yii\helpers\Url::to(['category/view','id'=>$item['id']]);?>">
                    <?php echo $item['title']?></a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>