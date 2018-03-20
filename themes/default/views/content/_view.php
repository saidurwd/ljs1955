<style>
    .post h1 {
        margin: 0 0 30px;
        font-size: 20px;
    }
</style>
<div class="row post">
    <div class="col-lg-3 col-md-3">
        <div class="post_thumb">
            <?php echo Content::get_images($data->id); ?>
        </div><!--end post thumb-->        
    </div>
    <div class="col-lg-9 col-md-9">
        <h1><?php echo CHtml::link($data->title, array('content/view', 'id' => $data->id)); ?></h1>
        <div class="meta">
            <span class="author">By: <?php echo UserAdmin::get_name($data->created_by); ?></span>
            <span class="date">Posted: <?php echo Content::get_date_time($data->created); ?></span>
        </div><!--end meta-->
        <div class="post_desc">
            <?php echo Content::limit_text($data->introtext, 100); ?>
        </div><!--end post desc-->
    </div>
</div>

<!--<div class="post">
    <div class="post_thumb">
<?php //echo Content::get_images($data->id); ?>
    </div>end post thumb
    <div class="meta">
        <span class="author">By: <?php //echo UserAdmin::get_name($data->created_by);  ?></span>
        <span class="date">Posted: <?php //echo Content::get_date_time($data->created);  ?></span>
    </div>end meta
<h1><?php //echo CHtml::link($data->title, array('content/view', 'id' => $data->id));  ?></h1>
    <div class="post_desc">
<?php //echo Content::limit_text($data->introtext, 100); ?>
    </div>end post desc
</div>end post-->