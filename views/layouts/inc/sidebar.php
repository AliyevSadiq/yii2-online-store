
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
<?php // \app\components\widgets\MenuWidget::widget([
//                        'tpl'=>'menu',
//                         'ul_class'=>'nav navbar-nav nav_1'
//                ]);
              echo  \app\components\widgets\CategoryMenuWidget::widget(['template'=>'all-category']);

                ?>

            </div><!-- /.navbar-collapse -->
        </nav>
    </div>