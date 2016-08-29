<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title>Petit-Point shop</title>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/libs/css/style.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/libs/css/reset.css" rel="stylesheet">
	<link rel="shortcut icon" href="fav.ico">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/libs/jscripts/jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/libs/jscripts/jqueryEasing.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/libs/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/libs/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/libs/jscripts/all-scripts.js"></script>
	
</head>

<body>
<?php
if (!isset($products))
$products = Shop::getCartContent();
?>

<div class="wrap">
	<div class="cart"><a href="cart.html"><?php echo count($products);?></a></div>
	<div class="main-width">
    	<header>
       		<div class="top-search">
            	<input name="" type="text">
                <input onclick="window.location.href='result-search.html'" name="" type="button" value="">
            </div> 	
        	<div class="top-logo"><a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data/images/pp-logo.png" width="177" height="58" alt="Logo"></a></div>    
        </header>
        <nav>
        	<div class="top-menu">
                <ul>
                    <li><a <?php if(Yii::app()->controller->action->id == 'index') echo 'class="active"'?> href="<?php echo  Yii::app()->getBaseUrl(true) . '/';  ?>">HOME</a></li>
                    <li><a <?php if(Yii::app()->controller->action->id == 'new') echo 'class="active"'?> href="<?php echo $this->createUrl('products/new');?>">new products</a></li>
                    <li><a <?php if(Yii::app()->controller->action->id == 'special') echo 'class="active"'?> href="<?php echo $this->createUrl('products/special');?>">Special</a></li>
                    <li><a <?php if(Yii::app()->controller->action->id == 'all') echo 'class="active"'?> href="<?php echo $this->createUrl('products/all');?>">All products</a></li>
                    <li><a <?php if(Yii::app()->controller->id == 'news') echo 'class="active"'?> href="<?php echo $this->createUrl('news/index');?>">news</a></li>
                    <li><a <?php if(Yii::app()->controller->id == 'contact') echo 'class="active"'?> href="<?php echo $this->createUrl('contact/index');?>">contact</a></li>
                    <li><a <?php if(Yii::app()->controller->id == 'faq') echo 'class="active"'?> href="<?php echo $this->createUrl('faq/index');?>">Faq's</a></li>
                </ul>
            </div>
        </nav>
        <section>       
            <div class="main-menu">
            	<ul>
                    <?php $this->widget('ProductCategoriesWidget'); ?>
                </ul>
                <div class="login">
                	<span>LOGIN</span>
                </div>
            </div>
            <div class="main-content">
            	<?php echo $content; ?>
            </div>
        </section>
        <footer>
            <p>copyright © 2014 <a href="#">Petit-Point Shop</a>.
                Develop by <a href="javascript:window.location = 'http://www.a2zsolution.vn'" target="_blank" style="color:#000000">A2Z Solution</a></p>
        </footer>
    </div>
    
</div>

<script>
    (function($){
        $('.cart').advScroll({
            easing:'easeOutBack',
            timer:1000
        });
    })(jQuery);
</script>

</body>
</html>