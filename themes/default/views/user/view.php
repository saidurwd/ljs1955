<?php
/* @var $this UserController */
/* @var $model User */

$this->pageTitle = $model->name;
?>
<h4>PERSONAL INFORMATION</h4>
<br />
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'username',
        'email',
    ),
));
$this->widget('zii.widgets.CDetailView', array(
    'data' => $modelProfile,
    'attributes' => array(
        'address',
        'residence_address',
        'mobile',
        'phone',
        'fax',
        'blood_group',
        'birth_date',
        'batch',
        'nick_name',
        'job_title',
        'company',
        'company_address',
        'office_phone',
        'office_email',
    ),
));
?>
