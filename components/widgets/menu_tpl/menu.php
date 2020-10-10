<?php

use yii\helpers\Url;

$class_li='';
$class_a='';
if(!empty($category['children'])){
    $class_li="class='dropdown'";
    $class_a='class="dropdown-toggle" data-toggle="dropdown"';
}


?>
<li <?php echo $class_li?>>
    <a href="<?php echo Url::to(['category/view','id'=>$category['id']]);?>"
        <?php echo $class_a?>>
        <?php echo $category['title'];?>
    </a>
    <?php if(!empty($category['children'])){ ?>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <?php
                                        echo $this->getMenuHtml($category['children']);
                                        ?>
                                    </ul>
                                </div>
                            </div>
    <?php }?>
</li>