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

<!--<div class="post">
    <div class="post_thumb">
        <?php //echo Content::get_images($model->id); ?>
    </div>end post thumb
    <div class="meta">
        <span class="author">By: <?php //echo UserAdmin::get_name($model->created_by); ?></span>
        <span class="date">Posted: <?php //echo Content::get_date_time($model->created); ?></span>
    </div>end meta
<h1><?php //echo $model->title; ?></h1>
    <div class="post_desc">
        <?php //echo $model->introtext; ?>
    </div>end post desc
</div>end post-->