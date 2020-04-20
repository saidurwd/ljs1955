<?php
/* @var $this UserController */
/* @var $model User */

$this->pageTitle = $model->name;
?>
<h1><?=$model->name?></h1>
<div class="single_content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 custom_right">
                <div class="single_content_left padding-border-right-twenty">
                    <div class="tab_menu">
                        <ul>
                            <li class="active"><a href="#explore_program" data-toggle="tab">Profile Summary</a></li>
                        </ul>
                    </div><!--end tab_menu-->
                    <div class="tab-content single_tab_content">
                        <div role="tabpanel" class="tab-pane active" id="explore_program">
                            <?=$modelProfile->profile_summary?>
                        </div><!--end tab-pane-->
                    </div><!--end tab-content-->
                </div><!--end single content left-->
            </div><!--end custom_right-->

            <div class="col-xs-12 col-sm-4 col-md-4 custom_left">
                <div class="sidebar">
                    <div class="sidebar_item">
                        <div class="item_inner">
                            <?=User::get_picture_alumni($model->id)?>
                        </div>
                    </div>
                    <div class="sidebar_item">
                        <div class="item_inner program">
                            <h4>At a Glance</h4>
                            <ul>
                                <li><span>Name:</span><?=$model->name?></li>
                                <li><span>Batch:</span><?=$modelProfile->batch?></li>
                                <li><span>Email:</span><?=$model->email?></li>
                                <li><span>Job Title:</span><?=$modelProfile->job_title?></li>
                                <li><span>Company:</span><?=$modelProfile->company?></li>
                                <li><span>Office Email:</span><?=$modelProfile->office_email?></li>
                            </ul>
                        </div>
                    </div><!--end sidebar item-->
                </div><!--end sidebar-->
            </div>

        </div><!--end row-->
    </div><!--end container-->
</div><!--end single content-->