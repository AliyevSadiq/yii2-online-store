<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>X</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= \yii\helpers\Html::img("/web/products/{$item['img']}", ['alt' => $item['name'],  'class'=>'img-responsive']) ?></td>
                    <td><?= $item['title']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id="<?= $id?>" style="color: red" class="del-item">X</span></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Итого: </td>
                <td id="cart-qty"><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td id="cart-sum">$<?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>