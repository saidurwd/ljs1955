
<div class="post">
    <div class="post_thumb">
        <?php echo Content::get_images($data->id); ?>
    </div><!--end post thumb-->
    <div class="meta">
        <span class="author">By: <?php echo UserAdmin::get_name($data->created_by); ?></span>
        <span class="date">Posted: <?php echo Content::get_date_time($data->created); ?></span>
    </div><!--end meta-->
    <h1><?php echo CHtml::link($data->title, array('content/view', 'id' => $data->id)); ?></h1>
    <div class="post_desc">
        <?php echo Content::limit_text($data->introtext, 100); ?>
    </div><!--end post desc-->
</div><!--end post-->