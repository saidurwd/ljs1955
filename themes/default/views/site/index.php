<!--top slide banner-->
<div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
    <div class="slides carousel-inner">
        <?php Content::get_home_banner(1); ?>
    </div>
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/prev.png">
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/next.png">
    </a>    
</div>
<!--end banner-->
<!--top Popular aboutArea-->
<div class="aboutArea">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="aboutTitle">
                    <h2>Student's Paintings of the week</h2>
                </div><!-- aboutTitle -->
            </div><!-- col-sm-3 col-xs-12 -->
        </div><!-- row clearfix -->
        <div class="about_inner clearfix">
            <div class="row">
                <?php Content::get_recent_paintings(6); ?>                                
            </div><!-- row -->
        </div><!-- about_inner -->

    </div><!-- container -->
</div>
<!-- end aboutArea -->

<!--main body-->
<div class="mainContent clearfix">
    <div class="container">
        <div class="row clearfix">
            <div class="col-sm-8 col-xs-12">
                <div class="videoNine clearfix">
                    <div class="videoArea clearfix">
                        <h3 style="font-size:20px;"><?php echo Content::getData(3, 'title'); ?></h3>
                        <div class="row">
                            <!--<div class="col-lg-8 col-md-7 col-xs-12 videoLeft">
                            <?php //echo Content::get_images(3); ?>
                            </div>-->
                            <div class="col-lg-12 col-md-12 col-xs-12 videoRight">
                                <?php echo '<p>' . Content::limit_text(Content::getData(3, 'introtext'), 200) . '</p>'; ?>
                                <?php //echo CHtml::link('Learn More', array('content/view', 'id' => 3), array('class' => 'btn btn-block btn-green')); ?>
                            </div><!-- videoRight -->
                        </div><!-- row -->
                    </div><!-- videoArea -->
                    <!-- 
                    <div class="related_post_sec single_post">
                        <h3>Events</h3>
                        <ul>
                            <?php //Banner::get_recent_events(6); ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    -->
                    <div class="list_block related_post_sec">
                        <div class="upcoming_events">
                            <h3>Announcement</h3>
                            <ul>
                                <?php Content::get_recent_notice(3); ?>
                            </ul>
                            <div class="clearfix"></div>
                            <br />
                            <?php echo CHtml::link('More Announcement', array('content/notices'), array('class' => 'btn btn-default btn-block btn-green')); ?>
                        </div>
                    </div><!-- end list_block --> 
                </div><!--videoNine-->
            </div><!-- col-sm-8 col-xs-12 -->
            <div class="col-sm-4 col-xs-12">
                <div class="list_block related_post_sec">
                    <div class="upcoming_events">
                        <h3><?php echo Content::get_title(16); ?></h3>
                        <?php echo Content::get_images(16); ?>
                        <?php echo '<p>' . Content::limit_text(Content::getData(16, 'introtext'), 44) . '</p>'; ?>
                        <?php echo CHtml::link('Read More', array('content/view', 'id' => 16), array('class' => 'btn btn-block btn-green')); ?>
                    </div>
                </div><!-- end Principal Message -->
                <div class="list_block related_post_sec">
                    <div class="upcoming_events">
                        <h3><?php echo Content::get_title(17); ?></h3>
                        <?php echo Content::get_images(17); ?>
                        <?php echo '<p>' . Content::limit_text(Content::getData(17, 'introtext'), 44) . '</p>'; ?>
                        <?php echo CHtml::link('Read More', array('content/view', 'id' => 17), array('class' => 'btn btn-block btn-green')); ?>
                    </div>
                </div><!-- end Vice Principal Message -->     
                <?php /*
                <div class="list_block related_post_sec">
                    <div class="upcoming_events">
                        <h3>Upcoming Events</h3>
                        <ul>
                            <?php Content::get_recent_event(4); ?>                            
                        </ul>
                        <?php //echo CHtml::link('More Events', array('content/events'), array('class' => 'btn btn-default btn-block commonBtn')); ?>
                    </div>
                </div><!-- end list_block -->
                */ ?>
            </div><!-- col-sm-4 col-xs-12 -->
        </div><!-- row clearfix -->
    </div><!-- container -->
</div>
<!-- end mainContent -->
<!--testimonial-->
<div class="testimonial-section clearfix"> 
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="testimonial">
                    <?php Content::get_recent_testimonial(5); ?> 
                </div><!-- testimonial -->
            </div><!-- col-xs-12 -->
            <?php /*
            <div class="col-xs-12 col-sm-6">
                <div class="features">
                    <h3><?php echo Content::getData(12, 'title'); ?></h3>
                    <?php echo Content::getData(12, 'introtext'); ?> <!-- <i class="fa fa-check-circle-o"></i>-->
                </div>
            </div><!-- col-xs-12 -->
            */ ?>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- testimonial-section -->