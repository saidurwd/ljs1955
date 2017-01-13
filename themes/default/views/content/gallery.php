<?php
$this->pageTitle = 'Picture Gallery';
?>
<div class="row">
    <div class="col-xs-12">
        <div class="photo_gallery custom">
            <ul class="gallery popup-gallery">
                <?php
                if (@$_REQUEST['id']) {
                    echo '<h1>' . BannerCategory::getData(@$_REQUEST['id'], 'title') . '</h1>';
                }
                ?> 
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}{pager}',
                    'itemView' => '_gallery',
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
            </ul>
        </div><!--end photo gallery-->
    </div>
</div>