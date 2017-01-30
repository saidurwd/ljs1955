<?php
/* @var $this UserController */
/* @var $model User */

$this->pageTitle = 'Alumni Registration';
?>
<h1>Alumni Registration</h1>
<?php $this->renderPartial('_form', array('model' => $model, 'modelProfile' => $modelProfile)); ?>