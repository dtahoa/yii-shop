<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<div class="sub-page">
    <h2>News</h2>
    <hr>
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
                    <span class="large-pict"><a href="news-detail.html"><img src="<?php echo Yii::app()->request->baseUrl ?>/data/images/img-news/img-news.jpg" width="260" height="260"></a></span>
                </div>
                <div class="prd-detail">
                    <p>Date Added: <?php echo date('l t F, Y', strtotime($data['created'])) ?></p>
                    <hr>
                    <h2><a href="news-detail.html"><?php echo $data['title']?></a></h2>
                    <p><?php echo $data['content']?></p>
                </div>
            </div>
        <?php }?>
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
