<?php
$this->pageTitle = 'Contact Us';
?>
<div class="row">
    <div class="col-xs-12 col-sm-8 custom_right">
        <div class="single_content_left">
            <h3>Contact Form</h3>
            <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
            <div class="contact_form">
                <?php if (Yii::app()->user->hasFlash('contact')) : ?>
                    <div class="flash-success">
                        <?php echo Yii::app()->user->getFlash('contact'); ?>
                    </div>
                <?php else : ?>
                    <?php $form = $this->beginWidget('CActiveForm'); ?>
                    <?php echo $form->errorSummary($model); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <div class="form-group">
                                <label>Name <span class="error">*</span></label>
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <div class="form-group">
                                <label>Email <span class="error">*</span></label>
                                <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <div class="form-group">
                                <label>Subject <span class="error">*</span></label>
                                <?php echo $form->textField($model, 'subject', array('class' => 'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-11">
                            <div class="form-group">
                                <label>Message <span class="error">*</span></label>
                                <?php echo $form->textArea($model, 'body', array('class' => 'form-control', 'rows' => 9, 'cols' => 10)); ?>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <?php if (CCaptcha::checkRequirements()) : ?>
                        <div class="row">
                            <?php echo $form->labelEx($model, 'verifyCode'); ?>
                            <div>
                                <?php $this->widget('CCaptcha'); ?>
                                <?php echo $form->textField($model, 'verifyCode'); ?>
                            </div>
                            <div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
                        </div>
                    <?php endif; ?>
                    <div class="row submit">
                        <?php echo CHtml::submitButton('Send Message', array('class' => 'commonBtn')); ?>
                    </div>
                    <?php $this->endWidget(); ?>
                <?php endif; ?>
            </div>
        </div>
        <!--end single content left-->
    </div>

    <div class="col-xs-12 col-sm-4 custom_left">
        <div class="sidebar">
            <div class="list_block sidebar_item">
                <h3>Contacts</h3>
                <ul class="contact_info">
                    <li><i class="fa fa-home"></i> Little Jewels Nursery Infant And Junior School, Purana Poltan, Dhaka-1000 </li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:ljs1955@dhaka.net">ljs1955@dhaka.net</a></li>
                    <li><i class="fa fa-phone"></i> +8802 55112143, +8802 55112145</li>
                    <li><i class="fa fa-globe"></i> <a href="#">http://www.ljs1955.com</a></li>
                </ul>
            </div>
            <div class="list_block">
                <h3>Business Hours</h3>
                <ul class="contact_info">
                    <li><strong>Sunday-Thursday:</strong> 8am to 2pm</li>
                    <li><strong>Saturday:</strong> 8am to 12pm</li>
                    <li><strong>Friday:</strong> Closed</li>
                </ul>
            </div>
            <!--end sidebar item-->
            <div class="list_block">
                <div class="newsletter">
                    <h3>Newsletter</h3>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
                        </div>
                        <button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end sidebar-->
    </div>
</div>
<!--end row-->