<?php
$this->pageTitle = $model->title;
?>
<div class="post">
    <div class="post_thumb">
        <?php echo Content::get_images(24); ?>
    </div>
<h1><?php echo $model->title; ?></h1>
    <div class="post_desc">
        <?php echo $model->introtext; ?>
    </div>
</div>

<div class="mainContent clearfix">
<div class="container">
    <div class="course-grid">
        <div class="about_inner clearfix">
            <div class="row">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}{pager}',
                    'itemView' => '_alumni',
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
        </div><!-- about_inner -->
    </div><!-- course-grid -->
</div><!-- container -->
</div><!-- mainContent -->
<style>
    .pager{
        clear: both;
    }
</style>