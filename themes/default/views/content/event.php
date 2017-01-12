<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
?>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-8 post_left">
        <div class="upcoming_events event-col">
            <div class="related_post_sec single_post">
                <span class="date-wrapper">
                    <span class="date"><?php echo Content::get_date_notice($model->created); ?></span>
                </span>
                <div class="rel_right">
                    <div class="single_post single-event">
                        <h1><?php echo $model->title; ?></h1>
                        <div class="meta">
                            <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                            <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                        </div>
                        <div class="post_desc">
                            <?php echo $model->introtext; ?>
                        </div><!--end post desc-->
                    </div><!--end single_post-->
                </div>
            </div>
        </div>
    </div><!--end post_left-->
    <div class="col-xs-12 col-sm-4 post_right">
        <div class="post_right_inner">
            <div class="related_post_sec">
                <div class="list_block">
                    <h3>Latest News</h3>
                    <ul>
                        <?php Content::get_latest_news(2); ?>
                    </ul>
                    <?php echo CHtml::link('More', array('content/index', 'id' => 2), array('class' => 'more_post')); ?>
                </div>

            </div><!--end related_post_sec-->
        </div><!--end post right inner-->
    </div><!--end post_right-->
</div><!--row-->