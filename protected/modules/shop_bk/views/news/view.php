<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);


?>
<div class="sub-page">
    <h2>News</h2>
    <hr>

    <div class="all-product">
        <div class="prd-textt">
            <div class="prd-textt-pict">
                <span class="large-pict"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-news/img-news.jpg" width="260" height="260"></a></span>
            </div>
            <div class="prd-detail">
                <p>Date Added: <?php echo date('l t F, Y', strtotime($model['created'])) ?></p>
                <hr>
                <h2><?php echo $model['title']?></h2>
                <p><?php echo $model['content']?></p>
            </div>
            <div class="news-detail">
                <?php echo $model['content']?>
            </div>
        </div>


    </div>

</div>
