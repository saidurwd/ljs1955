<div class="col-xs-6 col-sm-3">
    <div class="aboutImage">
        <a href="#">
            <?php echo User::get_picture_alumni($data->id); ?>
            <div class="overlay">
                <p><?=$data->name?></p>
            </div>
            <span class="captionLink">View Details<span></span></span>
        </a>
    </div><!-- aboutImage -->
    <h3>
        <a href="#" title="<?php echo $data->name; ?>" style="">
            <?=$data->name?>
        </a>
    </h3>
</div>