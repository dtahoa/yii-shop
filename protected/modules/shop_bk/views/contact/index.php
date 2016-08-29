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
    <h2>Contact</h2>
    <div class="all-product">
        <p>
            Customer Service: +1 800 559 6580<br />
            9870 St Vincent Place,<br />
            Glasgow, DC 45 Fr 45.<br />
        </p>
        <hr>
        <p>
            <strong>Contact Us Sample Text ...</strong><br />
            This section of text is from the Define Pages Editor located under Tools in the Admin.<br />
            To remove this section of the text, delete it from the Define Pages Editor.
        </p>
        <div class="contact">
            <div class="ct-title">Contact Us</div>
            <div class="form-style marT20">
                <p>
                    <label>Full Name: *</label>
                    <input name="" type="text">
                </p>
                <p>
                    <label>Email Address: *</label>
                    <input name="" type="text">
                </p>
                <p>
                    <label>Message: *</label>
                    <textarea rows="10"></textarea>
                </p>
                <p>
                    <label>&nbsp;</label>
                    <span>* Required information</span>
                </p>
                <p>
                    <label>&nbsp;</label>
                    <a class="red-button" href="#">Send</a>
                </p>
            </div>
        </div>
    </div>

</div>