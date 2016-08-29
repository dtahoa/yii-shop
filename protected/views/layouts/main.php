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
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/libs/jscripts/all-scripts.js"></script>
	
</head>

<body>

<div class="wrap">
	<div class="cart"><a href="cart.html">0</a></div>
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
                    <li><a class="active" href="<?php echo Yii::app()->getBaseUrl(true) . '/';  ?>">HOME</a></li>
                    <li><a href="new-products.html">new products</a></li>
                    <li><a href="special.html">Special</a></li>
                    <li><a href="all-product.html">All products</a></li>
                    <li><a href="news.html">news</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="faq.html">Faq's</a></li>
                </ul>
            </div>
        </nav>
        <section>       
            <div class="main-menu">
            	<ul>
                    <li><a href="all-product.html">evening bag</a></li>
                    <li><a href="all-product.html">shoulder bag</a></li>
                    <li><a href="all-product.html">wallet</a></li>
                    <li><a href="all-product.html">Pouch</a></li>
                    <li><a class="active" href="all-product.html">picture &gt;</a>
                    	<ul>
                        	<li><a href="all-product.html">Wallet</a></li>
                            <li><a href="all-product.html">Pouch</a></li>
                            <li><a href="all-product.html">Pens case</a></li>
                        </ul>
                    </li>
                    <li><a href="all-product.html">purse</a></li>
                    <li><a href="all-product.html">spectacle case</a></li>
                    <li><a href="all-product.html">pens case</a></li>
                    <li><a href="all-product.html">picture</a></li>
                    <li><a href="all-product.html">evening bag</a></li>
                    <li><a href="all-product.html">shoulder bag</a></li>
                    <li><a href="all-product.html">wallet</a></li>
                    <li><a href="all-product.html">Pouch</a></li>
                    <li><a href="all-product.html">purse</a></li>
                    <li><a href="all-product.html">spectacle case</a></li>
                    <li><a href="all-product.html">pens case</a></li>
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

</body>
</html>