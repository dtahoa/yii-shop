<?php
if (!isset($products))
    $products = Shop::getCartContent();

if (!isset($this->breadcrumbs) || ($this->breadcrumbs == array()))
    $this->breadcrumbs = array(
        Shop::t('Shop') => array('//shop/products/'),
        Shop::t('Shopping Cart'));
?>

<?php
if ($products) {?>
    <div class="sub-page">
        <h2>Your Shopping Cart Contents</h2>

        <div class="all-product">
            <p>You may want to add some instructions for using the shopping cart here</p>
            <hr>
            <p><strong>Total Items: <?php echo count($products); ?>  Weight: <?php echo Shop::getWeightTotal(); ?>lbs
                    Amount: $<?php echo Shop::getPriceTotal() ?></strong></p>

            <table class="tb-style">
                <tr>
                    <th>No.</th>
                    <th>Item name</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Total</th>
                    <th>Delete</th>
                </tr>
                <?php
                $i=1;
                foreach ($products as $position => $product) {
                    if (@$model = Products::model()->findByPk($product['product_id'])) {
                        $variations = '';
                        if (isset($product['frame-included'])) {
                            // Check frame included
                            $variations = 1;
                        }
                        ?>
                        <tr>
                            <td align="center" valign="top" width="8%"><?php echo $i; $i++ ?></td>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <th><a href="<?php echo $this->createUrl('/shop/products/view', array('id'=>$product['product_id']))?>"><?php echo $model['title'] ?></a></th>
                                    </tr>
                                    <tr>
                                        <td align="center"><a href="<?php echo $this->createUrl('/shop/products/view', array('id'=>$product['product_id']))?>"><img
                                                    src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03.png"
                                                    width="260" height="260"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="center" valign="top" width="15%">
                                <input  rel="<?php echo $position;?>" class="amount" style="width:60px" name="" placeholder="<?php echo $product['amount']?>" type="text"></td>
                            <td align="left" valign="top" width="15%">
                                <h3 rel="<?php echo Shop::priceFormat($model->getPrice(@$variations)); ?>" class="<?php echo 'price_'.$position;?>">
                                    $<?php echo Shop::priceFormat($model->getPrice(@$variations)); ?></h3>
                            </td>
                            <td align="left" valign="top" width="15%">
                                <h2 class="<?php echo 'total_price_'.$position;?>">
                                    $<?php echo Shop::priceFormat($model->getPrice(@$variations, @$product['amount'])); ?></h2>
                            </td>
                            <td align="center" valign="top" width="8%">
                                <a href="<?php echo $this->createUrl('/shop/shoppingCart/delete',array('id' => $position))?>">
                                    <img src="<?php echo Yii::app()->request->baseUrl ?>/data/images/ico-delete.png"width="16" height="16">
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                }?>
            </table>

            <div class="sub-total">
                Sub-Total: <span>$710.00</span>
            </div>
            <div>
                <a class="black-button marT20" style="margin-right:15px" href="/shop/products/all">Back to shopping</a>
                <a class="red-button marT20" href="/shop/order/create">Go to checkout</a>
            </div>
        </div>

    </div>
<?php
} else {
    echo Shop::t('Your shopping cart is empty');
}?>
