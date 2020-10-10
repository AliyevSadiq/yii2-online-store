 <ul class="nav navbar-nav nav_1">

                    <?php
                    $class_li='';
                    $class_a='';

                     foreach ($tree as $item){


                    if(!empty($item['children'])){
                        $class_li='class="dropdown"';
                        $class_a='class="dropdown-toggle" data-toggle="dropdown"';
                    }



                    ?>

                    <li <?php echo $class_li;?>>
                        <a href="<?php echo \yii\helpers\Url::to(['category/view','id'=>$item['id']]);?>" <?php echo $class_a;?>><?php echo $item['title'];?></a>
                       <?php  if(!empty($item['children'])){?>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <?php foreach ($item['children'] as $sub_category){?>
                                    <li><a href="<?php echo \yii\helpers\Url::to(['category/view','id'=>$sub_category['id']]);?>"><?php echo $sub_category['title'];?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                    </li>
<?php }?>
                </ul>