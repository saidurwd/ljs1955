<div class="col-xs-6 col-sm-6">
    <div class="related_post_sec single_post">
        <span class="date-wrapper">
            <span class="date"><?php echo Content::get_date_notice($data->created); ?></span>
        </span>
        <div class="rel_right">
            <h4><?php echo CHtml::link($data->title, array('content/event', 'id' => $data->id)); ?></h4>
            <div class="meta">
                <span class="place"><i class="fa fa-map-marker"></i><?php echo CHtml::link(ContentCategory::getData($data->catid, 'title'), array('content/events', 'id' => $data->catid)); ?></span>
                <i class="fa fa-clock-o"></i><?php echo $data->metadesc; ?>
            </div>
            <?php echo Content::limit_text($data->introtext, 50); ?>
            <?php echo CHtml::link('view Detals', array('content/event', 'id' => $data->id), array('class' => 'btn btn-default commonBtn')); ?>
        </div>
    </div>
</div>