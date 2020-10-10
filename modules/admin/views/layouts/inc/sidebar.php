<?php

use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/web/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo \Yii::$app->user->identity->username;?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $main_active='';
        $order_active='';
        $category_active='';
        $product_active='';


        if(Yii::$app->controller->id=='main'){
            $main_active='class="active"';
        }
        if(Yii::$app->controller->id=='order'){
            $order_active='class="active"';
        }
        if(Yii::$app->controller->id=='category'){
            $category_active='class="active"';
        }
        if(Yii::$app->controller->id=='product'){
            $product_active='class="active"';
        }


        ?>




        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li <?php echo $main_active;?>>
                <a href="<?php echo Url::to(['/admin'])?>">
                    <i class="fa fa-link"></i>
                    <span>Statistic online store</span>
                </a>
            </li>
            <li <?php echo $order_active;?>>
                <a href="<?php echo Url::to(['/admin/order'])?>">
                    <i class="fa fa-link"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li <?php echo $category_active;?>>
                <a href="<?php echo Url::to(['/admin/category'])?>">
                    <i class="fa fa-link"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li <?php echo $product_active;?>>
                <a href="<?php echo Url::to(['/admin/product'])?>">
                    <i class="fa fa-link"></i>
                    <span>Products</span>
                </a>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>use yii\helpers\Url;