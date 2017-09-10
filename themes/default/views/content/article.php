<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 post_left pull-right">
        <div class="post_left_section">
            <div class="post single_post">
                <div class="post_thumb">
                    <?php Content::get_image_view($model->id); ?>
                </div><!--end post thumb-->
                <div class="meta">
                    <span class="author">By: <?php echo UserAdmin::get_name($model->created_by); ?></span>
                    <span class="category"> <?php echo ContentCategory::getCategoryName($model->catid); ?></span>
                    <span class="date">Posted: <?php echo Content::get_date_time($model->created); ?></span>
                </div><!--end meta-->
                <h1><?php echo $model->title; ?></h1>
                <div class="post_desc">
                    <?php echo $model->introtext; ?>
                </div><!--end post desc-->
            </div><!--end post-->
        </div><!--end post left section-->
    </div>
    <?php /* 
    <div class="col-xs-12 col-sm-4 post_right pull-left">
        <div class="post_right_inner">
            <div class="related_post_sec">
                <div class="list_block">
                    <div class="upcoming_events">
                    <h3>Upcoming Events</h3>
                    <ul>
                        <?php Content::get_latest_event(4); ?>
                    </ul>
                    <?php echo CHtml::link('More', array('content/events'), array('class' => 'more_post')); ?>
                    </div>
                </div>  
                <div class="list_block">
                    <h3>Latest News</h3>
                    <ul>
                        <?php Content::get_latest_news(2); ?>
                    </ul>
                    <?php echo CHtml::link('More', array('content/news'), array('class' => 'more_post')); ?>
                </div> 
            </div><!--end related_post_sec-->
        </div><!--end post right inner-->
    </div><!--end post_right-->
    */ ?>
</div>