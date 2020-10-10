<?php
use yii\helpers\Url;

?>
<div class="product_list_header">
    <button type="button" onclick="getCart()" class="button" data-target="#modal-cart" data-toggle="modal">
       <span class="cart-sum" style="color: white">
           $<?php echo $_SESSION['cart.sum'] ?? '0';?></span>
    </button>

    <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalLabel">Store Basket</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Continue</button>

                    <button type="button" onclick="clearCart()"  data-dismiss="modal" class="btn btn-danger">Clean Basket</button>
                    <a href="<?php echo Url::to(['cart/checkout'])?>" class="btn btn-success">Confirm Order</a>

                </div>
            </div>
        </div>
    </div>



</div>