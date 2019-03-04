<ul class="gallery popup-gallery">
    <li>
        <a href="<?php echo Yii::app()->baseUrl . '/uploads/banners/' . $data->banner; ?>" title="<?php echo $data->name; ?>" style="">
            <img src="<?php echo Yii::app()->baseUrl . '/uploads/banners/' . $data->banner; ?>" alt="">
            <div class="overlay">
                <span class="zoom">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </a>
    </li>
</ul>