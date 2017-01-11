<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
?>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="content_left features">
            <h1><?php echo $model->title; ?></h1>
            <?php Content::get_image_view($model->id); ?>
            <p><?php echo $model->introtext; ?></p>
        </div><!--end content left-->
    </div>
</div><!--end row-->