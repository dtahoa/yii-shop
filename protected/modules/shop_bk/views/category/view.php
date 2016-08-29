<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('ShopModule.shop', 'Categories')=>array('index'),
    $category->title,
);
$currentPage = $pages->getCurrentPage()+1;
?>
<?php if($model) {?>
<div class="sub-page">
    <h2><?php echo $category->title; ?></h2>

    <div class="sort">
        Sort by:&nbsp;
        <select name="sort" id="goto">
            <option <?php if($sort == 'price asc') echo 'selected';?> value='<?php echo $this->createUrl("/shop/category/view/id/".$category->category_id). "/price/asc/page/$currentPage";?>'>Price: Low to Height</option>
            <option <?php if($sort == 'price desc') echo 'selected';?> value='<?php echo $this->createUrl("/shop/category/view/id/".$category->category_id). "/price/desc/page/$currentPage";?>'>Price: Height to Low</option>
            <option <?php if($sort == 'created_time desc') echo 'selected';?> value='<?php echo $this->createUrl("/shop/category/view/id/".$category->category_id). "/date/desc/page/$currentPage";?>'>Date: New to Old</option>
            <option <?php if($sort == 'created_time asc') echo 'selected';?> value='<?php echo $this->createUrl("/shop/category/view/id/".$category->category_id). "/date/asc/page/$currentPage";?>'>Date: Old to New</option>
        </select>
    </div>
    <div class="paging-block">
        <p>Displaying <?php echo $pages->getCurrentPage()*4+1;?>  to <?php echo ($pages->getCurrentPage()+1) * 4;?> (of <?php echo $item_count?> products)</p>

        <div class="pages">
            <?php
            // the pagination widget with some options to mess
            $this->widget('MyLinkPager', array(
                'currentPage' => $pages->getCurrentPage(),
                'itemCount' => $item_count,
                'pageSize' => $page_size,
                'maxButtonCount' => 5,
                'header' => '',
                'htmlOptions' => array('class' => 'pages'),
            ));
            ?>
        </div>
    </div>
    <div class="all-product">
        <?php foreach ($model as $key => $data) { ?>
            <div class="prd-textt">
                <div class="prd-textt-pict">
                    <span class="large-pict"><a href="<?php echo $this->createUrl('/shop/products/view', array('id'=>$data['product_id']))?>"><img
                                src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-products/img-product03.png"
                                width="260" height="260"></a></span>
                    <span class="small-pict">In Stock: 998</span>
                </div>
                <div class="prd-detail">
                    <p>Date Added: <?php echo date('l t F, Y', strtotime($data['created_time'])) ?></p>
                    <hr>
                    <h2><a href="product-detail.html"><?php echo $data['title'] ?></a></h2>

                    <p class="label"><strong>Model:</strong> Model2</p>

                    <p class="label"><strong>Manufacturer:</strong> Example </p>

                    <p class="label"><strong>Weight:</strong> 3lbs</p>

                    <p class="marT20">
                        <span style="margin:7px 15px 0 0" class="floatL"><strong>Price:</strong></span>
                        <?php if ($data['price'] && $data['new_price']) { ?>
                            <span class="old-price">$<?php echo $data['price'] ?></span>
                            <span class="new-price">$<?php echo $data['new_price'] ?></span>
                        <?php } else { ?>
                            <span class="new-price">$<?php echo $data['price'] ?></span>
                        <?php } ?>
                    </p>

                    <div class="clearB"></div>
                    <a class="red-button marT20 buy-now" rel="<?php echo $data['product_id']?>" href="javascript:void(0)">Buy now</a>
                </div>
                <p class="detail">
                    <strong style="color:#000000">Details:</strong><br/>
                    <?php echo $data['description'] ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="paging-block">
        <p>Displaying <?php echo $pages->getCurrentPage()*4+1;?>  to <?php echo ($pages->getCurrentPage()+1) * 4;?> (of <?php echo $item_count?> products)</p>

        <div class="pages">
            <?php
            // the pagination widget with some options to mess
            $this->widget('MyLinkPager', array(
                'currentPage' => $pages->getCurrentPage(),
                'itemCount' => $item_count,
                'pageSize' => $page_size,
                'maxButtonCount' => 5,
                'header' => '',
                'htmlOptions' => array('class' => 'pages'),
            ));
            ?>
        </div>
    </div>
</div>
<?php } else {?>
    <h2>There is no product</h2>
<?php }?>

<div class="clear"> </div>


