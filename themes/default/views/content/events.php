<?php
$this->pageTitle = 'Events';
?>
<div class="row">
    <div class="col-xs-12 col-sm-8 post_left pull-right">
        <div class="upcoming_events event-col">
            <div class="row clearfix">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}{pager}',
                    'itemView' => '_events',
                    'pager' => array(
                        'header' => '',
                        'prevPageLabel' => '<i class="fa fa-backward"></i>',
                        'nextPageLabel' => '<i class="fa fa-forward"></i>',
                        'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
                        'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
                        'selectedPageCssClass' => 'active', //default "selected"
                        'maxButtonCount' => 10, // defalut 10  
                        'htmlOptions' => array(
                            'class' => 'pagination',
                            'style' => '',
                            'id' => '',
                        ),
                    ),
                ));
                ?>
            </div><!-- row clearfix -->
        </div>
    </div><!--end post_left-->
    <div class="col-xs-12 col-sm-4 post_right pull-left">
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
</div>