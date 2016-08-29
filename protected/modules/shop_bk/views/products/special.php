<?php
$this->breadcrumbs=array(
	Shop::t('Products'),
);
Shop::renderFlash();
?>
<?php foreach($dataProvider->data as $key => $data) {?>
    <?php if($key % 3 == 0) echo '<div class="main-product"><ul>';?>
            <li>
                <?php
                    $isSpecial = Yii::app()->request->getQuery('special');
                    if($isSpecial && $data['is_special']) {?><div class="special"></div><?php }?>
                <a href="<?php echo $this->createUrl('products/view', array('id' => $data['product_id']));?>">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/data/images/img-products/img-product01.png" width="260" height="260" alt="product01">
                    <div>
                        <h3><?php echo $data['title']?></h3>
                        <p><?php echo substr($data['description'], 0, 100);?>...</p>
                        <?php if(!empty($data['price'])) {?>
                            <span class="old-price">$<?php echo $data['price']?></span>
                        <?php }?>
                        <?php if(!empty($data['new_price'])) {?>
                            <span class="new-price">$<?php echo $data['new_price']?></span>
                        <?php }?>
                    </div>
                </a>
            </li>
    <?php if($key % 3 == 2) echo '</div></ul>';?>
<?php }?>