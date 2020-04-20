<div class="col-xs-6 col-sm-3">
    <div class="aboutImage">
        <?php echo CHtml::link(User::get_picture_alumni($data->id).'<div class="overlay">'.$data->name.'</div><span class="captionLink">View Details<span></span></span>', array('user/view', 'id' => $data->id), array('class' => '')); ?>
    </div>
    <h3>
        <?php echo CHtml::link($data->name, array('user/view', 'id' => $data->id), array('class' => '', 'title'=>$data->name)); ?>
    </h3>
</div>