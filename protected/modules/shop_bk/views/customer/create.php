<?php
if (!isset($customer))
    $customer = new Customer;

if (!isset($address))
    $address = new Address;

$this->breadcrumbs = array(
    Yii::t('ShopModule.shop', 'Customers') => array('index'),
    Yii::t('ShopModule.shop', 'Register as a new Customer'),
);

?>


<?php

echo $this->renderPartial('/customer/_form', array(
    'action' => isset($action) ? $action : null,
    'customer' => $customer,
    'billingAddress' => $billingAddress,
    'deliveryAddress' => $deliveryAddress
)); ?>
