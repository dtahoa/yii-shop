<?php
$this->breadcrumbs = array(
    Shop::t('Products') => array('index'),
    $model->title,
);

echo CHtml::beginForm('/shop/shoppingCart/create','post',array('id'=>'add-to-cart'));
echo CHtml::hiddenField('product_id', $model->product_id);
?>
<div class="sub-page">
    <h2>Picture</h2>

    <div class="all-product">
        <div class="prd-textt">
            <div id="content" class="prd-textt-pict">
                <span class="large-pict">

                    <a rel="example_group"
                       href="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03_b.png"
                       title="Lorem ipsum dolor sit amet">
                        <img width="260" height="260" alt=""
                             src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03.png"/></a>
                </span>
                <span class="small-pict">
                    <a rel="example_group"
                       href="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03_b.png"
                       title="Lorem ipsum dolor sit amet"><img width="73" height="73" alt=""
                                                               src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03.png"/></a>
                    <a rel="example_group"
                       href="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product10_b.png"
                       title="Lorem ipsum dolor sit amet"><img width="73" height="73" alt=""
                                                               src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product10.png"/></a>
                    <a rel="example_group"
                       href="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product11_b.png"
                       title="Lorem ipsum dolor sit amet"><img style="margin-right:0" width="73"
                                                               height="73" alt=""
                                                               src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product11.png"/></a>


                </span>

            </div>
            <div class="prd-detail">
                <h2><?php echo $model->title ?></h2>
                <hr>
                <p class="label"><strong>Model:</strong> <?php echo $model->model?></p>

                <p class="label"><strong>Manufacturer:</strong> <?php echo $model->manufacturer?> </p>

                <p class="label"><strong>Weight:</strong> <?php echo $model->weight;?>lbs</p>

                <p class="label"><strong>Size:</strong> <?php echo $model->size?>(cm)</p>

                <p style="margin:10px 0">
                    <span style="margin:0px 10px 0 0" class="floatL">
                        <input name="frame-included" type="checkbox" value="1" checked="checked">
                    </span>
                    <span style="margin-top:2px" class="floatL">including frame</span>
                </p>

                <p class="marT20 floatL">
                    <span style="margin:7px 15px 0 0" class="floatL"><strong>Price:</strong></span>
                    <?php if ($model->price && $model->new_price) { ?>
                        <span class="old-price">$<?php echo $model->price ?></span>
                        <span class="new-price">$<?php echo $model->new_price ?></span>
                    <?php } else { ?>
                        <span class="new-price">$<?php echo $model->price ?></span>
                    <?php } ?>
                </p>

                <p class="marT20 floatL">
                    Add to cart:
                    <input style="width:60px" name="amount" type="text" placeholder="1" value="1">
                </p>

                <div class="clearB"></div>
                <a class="red-button marT20" href="javascript:{}" onclick="document.getElementById('add-to-cart').submit()">Add this to my cart</a>
            </div>
            <p class="detail">
                <strong style="color:#000000">Details:</strong><br/>
                <?php echo $model->description?>
            </p>
        </div>
    </div>

</div>
<?php echo CHtml::endForm();?>
