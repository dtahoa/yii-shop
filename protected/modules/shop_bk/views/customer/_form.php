<div class="sub-page">
    <h2>Checkout</h2>

    <div class="all-product">
        <?php
        if (isset($action) && $action !== null) {
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'customer-form',
                'action' => $action,
                'enableAjaxValidation' => true,
            ));
        } else {

            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'customer-form',
                'enableAjaxValidation' => true,
            ));
        }?>

        <div class="contact">
            <div class="ct-title">Billing Address</div>
            <div class="form-style marT20">
                <?php echo $form->hiddenField($customer, 'user_id', array('value' => Yii::app()->user->id)); ?>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'firstname'); ?>
                    <?php echo $form->textField($billingAddress, 'firstname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'firstname'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'lastname'); ?>
                    <?php echo $form->textField($billingAddress, 'lastname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'lastname'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'street'); ?>
                    <?php echo $form->textField($billingAddress, 'street', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'street'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'city'); ?>
                    <?php echo $form->textField($billingAddress, 'city', array('size' => 32, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'city'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'state'); ?>
                    <?php echo $form->textField($billingAddress, 'state', array('size' => 32, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'state'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'zipcode'); ?>
                    <?php echo $form->textField($billingAddress, 'zipcode', array('size' => 10, 'maxlength' => 45)); ?>
                    <?php echo $form->error($billingAddress, 'zipcode'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'email'); ?>
                    <?php echo $form->textField($billingAddress, 'email', array('type' => 'email')); ?>
                    <?php echo $form->error($billingAddress, 'email'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($billingAddress, 'phone'); ?>
                    <?php echo $form->textField($billingAddress, 'phone', array('type' => 'tel')); ?>
                    <?php echo $form->error($billingAddress, 'phone'); ?>
                </p>
                <p>
                    <label>&nbsp;</label>
                    <span><input name="" type="checkbox" value="">Deliver to a same address</span>
                </p>
                <p>
                    <label>&nbsp;</label>
                    <span><input name="" type="checkbox" value=""> Create an account? </span>
                </p>

            </div>
        </div>
        <div class="contact">
            <div class="ct-title">Delivery Address</div>
            <div class="form-style marT20">
                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'firstname'); ?>
                    <?php echo $form->textField($deliveryAddress, 'firstname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'firstname'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'lastname'); ?>
                    <?php echo $form->textField($deliveryAddress, 'lastname', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'lastname'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'street'); ?>
                    <?php echo $form->textField($deliveryAddress, 'street', array('size' => 45, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'street'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'city'); ?>
                    <?php echo $form->textField($deliveryAddress, 'city', array('size' => 32, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'city'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'state'); ?>
                    <?php echo $form->textField($deliveryAddress, 'state', array('size' => 32, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'state'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'zipcode'); ?>
                    <?php echo $form->textField($deliveryAddress, 'zipcode', array('size' => 10, 'maxlength' => 45)); ?>
                    <?php echo $form->error($deliveryAddress, 'zipcode'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'email'); ?>
                    <?php echo $form->textField($deliveryAddress, 'email', array('type' => 'email')); ?>
                    <?php echo $form->error($deliveryAddress, 'email'); ?>
                </p>

                <p>
                    <?php echo $form->labelEx($deliveryAddress, 'phone'); ?>
                    <?php echo $form->textField($deliveryAddress, 'phone', array('type' => 'tel')); ?>
                    <?php echo $form->error($deliveryAddress, 'phone'); ?>
                </p>

                <p>
                    <label>&nbsp;</label>
                    <a class="red-button" href="javascript:{}" onclick="document.getElementById('customer-form').submit();">Save and Continue</a>
                </p>
            </div>

        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

</div>




