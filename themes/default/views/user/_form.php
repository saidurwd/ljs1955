<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'apply_from')
        ));
?>
<style>
    .space-10{
        margin-top: 10px;
    }
</style>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<h4>PERSONAL INFORMATION</h4>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($model, 'name'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($model, 'email'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($model, 'username'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($model, 'password'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'address'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'address', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'residence_address'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'residence_address', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'mobile'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'mobile', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'phone'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'phone', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'fax'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'fax', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'blood_group'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'blood_group', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'birth_date'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php
            echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                'language' => 'en',
                'model' => $modelProfile, // Model object
                'attribute' => 'birth_date',
                'options' => array(
                    'mode' => 'date',
                    'changeYear' => true,
                    'changeMonth' => true,
                    'yearRange' => '1900:2200',
                    'dateFormat' => 'yy-mm-dd',
                    'timeFormat' => '',
                    'showTimepicker' => false,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Birth Date',
                    'class' => 'form-control',
                ),
                    ), true);
            ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'batch'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'batch', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'nick_name'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'nick_name', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>

<h4>COMPANY INFORMATION</h4>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'job_title'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'job_title', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'company'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'company', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'company_address'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'company_address', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'office_phone'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'office_phone', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>
<div class="row space-10">
    <div class="col-xs-12 col-sm-4">
        <div class="text-right"><?php echo $form->labelEx($modelProfile, 'office_email'); ?></div>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="text-field">
            <?php echo $form->textField($modelProfile, 'office_email', array('class' => 'form-control')); ?>
        </div>
    </div>
</div>

<div class="row buttons pull-right space-10">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'commonBtn')); ?>
</div>

<?php $this->endWidget(); ?>