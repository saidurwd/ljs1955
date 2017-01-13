<div class="col-xs-6 col-sm-6">
    <div class="related_post_sec single_post">
        <span class="date-wrapper">
            <span class="date"><?php echo Content::get_date_notice($data->created); ?></span>
        </span>
        <div class="rel_right">
            <h4><?php echo CHtml::link($data->title, array('content/notice', 'id' => $data->id)); ?></h4>
            <div class="meta">
                <span class="event-time"><i class="fa fa-clock-o"></i><?php echo Content::get_date_time($data->created); ?></span>
            </div>
            <?php echo Content::limit_text($data->introtext, 50); ?>
            <?php echo CHtml::link('view Detals', array('content/notice', 'id' => $data->id), array('class' => 'btn btn-default commonBtn')); ?>
        </div>
    </div>
</div>