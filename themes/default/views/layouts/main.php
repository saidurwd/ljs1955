<?php //echo CHtml::encode(Yii::app()->name);             ?>        
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link rel="icon" type="image/png" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/select_option1.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/fullcalendar.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/options/optionswitch.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/animate.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/colors/default.css" id="option_color">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--=== option Switcher ===-->
        <i class="option-switcher-btn fa fa-gear hidden-xs"></i>
        <div class="option-switcher animated fadeInRight">
            <div class="option-swticher-header">
                <div class="option-switcher-heading">Style Options</div>            
                <div class="theme-close"><i class="fa fa-close"></i></div>
            </div>
            <div class="option-swticher-body">
                <!-- Theme Colors -->
                <ul class="list-unstyled">
                    <li class="theme-default theme-active" data-color="default" data-logo="default-logo"></li>
                    <li class="theme-grayGreen" data-color="gray-green" data-logo="grayGreen"></li>
                    <li class="theme-blueOrange" data-color="blue-orange" data-logo="blueOrange"></li>
                    <li class="theme-grayBlue last" data-color="gray-blue" data-logo="grayBlue"></li>
                </ul>
                <!-- Layout Styles -->
                <div class="row no-col-space layoutStyle">
                    <div class="col-xs-6">
                        <a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a>                
                    </div>
                    <div class="col-xs-6">
                        <a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a>
                    </div>                
                </div> 
                <!-- Header Styles -->
                <div class="row no-col-space headerStyle">
                    <div class="col-xs-6">
                        <a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header-btn">Fixed Top</a>               
                    </div>
                    <div class="col-xs-6">
                        <a href="javascript:void(0);" class="btn-u  btn-block static-header-btn">Static Top</a>
                    </div>               
                </div>              
            </div>
        </div>
        <!--/option-switcher-->
        <div class="main_wrapper">
            <!--top email, phone and social icon-->
            <div class="topbar clearfix">
                <div class="container">
                    <ul class="topbar-left">
                        <li class="phoneNo"><i class="fa fa-phone"></i>+880 2 9552854, +880 2 9562502</li>
                        <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
                            <a href="mailto:ljs1955@dhaka.net">ljs1955@dhaka.net</a>
                        </li>
                    </ul>
                    <ul class="topbar-right">
                        <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li class="dropdown top-search list-inline">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <form action="http://themes.iamabdus.com/royal/1.2/courses.html" method="post">
                                    <input type="text" placeholder="Course Name" id="exampleInputEmail1" class="form-control">
                                    <button class="btn btn-default commonBtn" type="submit">Search</button>
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown language">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>EN
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="#">English </a> 
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!--top nav bar-->
            <div class="header clearfix">
                <nav class="navbar navbar-main navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header_inner">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/img/logo.jpg', 'Logo', array('alt' => 'Logo')), array('site/index'), array('class' => 'navbar-brand logo clearfix')); ?>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="main-nav">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><?php echo CHtml::link('Home', array('site/index')); ?></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                                                <ul class="dropdown-menu">
                                                    <li><?php echo CHtml::link(Content::getData(16, 'title'), array('content/view', 'id' => 16)); ?></li>
                                                    <li><?php echo CHtml::link(Content::getData(17, 'title'), array('content/view', 'id' => 17)); ?></li>
                                                    <li><?php echo CHtml::link(Content::getData(18, 'title'), array('content/view', 'id' => 18)); ?></li>                  
                                                </ul>
                                            </li>
                                            <li><?php echo CHtml::link(Content::getData(15, 'title'), array('content/view', 'id' => 15)); ?></li>
                                            <li><?php echo CHtml::link(Content::getData(19, 'title'), array('content/view', 'id' => 19)); ?></li>
                                            <li><?php echo CHtml::link('Event', array('content/events')); ?></li>
                                            <li><?php echo CHtml::link('Gallery', array('content/gallery')); ?></li>                                             
                                            <li class="apply_now">
                                                <?php echo CHtml::link('Contact us', array('site/contact')); ?>
                                            </li>                                            
                                        </ul>
                                    </div><!-- navbar-collapse -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                </nav><!-- navbar -->
            </div>

            <?php echo $content; ?>

            <!--footer menu-->
            <div class="menuFooter clearfix">
                <div class="container">
                    <div class="row clearfix">

                        <div class="col-sm-3 col-xs-6">
                            <ul class="menuLink clearfix">
                                <li><?php echo CHtml::link(Content::getData(15, 'title'), array('content/view', 'id' => 15)); ?></li>
                                <li><?php echo CHtml::link(Content::getData(19, 'title'), array('content/view', 'id' => 19)); ?></li>
                                <li><?php echo CHtml::link('Event', array('content/events')); ?></li>
                                <li><?php echo CHtml::link('Gallery', array('content/gallery')); ?></li> 
                                <li><?php echo CHtml::link('News', array('content/index', 'id' => 2)); ?></li> 
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <ul class="menuLink clearfix">
                                <li><?php echo CHtml::link(Content::getData(16, 'title'), array('content/view', 'id' => 16)); ?></li>
                                <li><?php echo CHtml::link(Content::getData(17, 'title'), array('content/view', 'id' => 17)); ?></li>
                                <li><?php echo CHtml::link(Content::getData(18, 'title'), array('content/view', 'id' => 18)); ?></li> 
                                <li><?php echo CHtml::link('Paintings', array('content/index', 'id' => 6)); ?></li>       
                                <li><?php echo CHtml::link('Notice Board', array('content/notices')); ?></li>                                     
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <div class="footer-address">
                                <h5>Location:</h5>
                                <address>
                                    Little Jewels Nursery Infant<br /> And Junior School<br />
                                    Purana Poltan<br />
                                    Dhaka-1000
                                </address>
                                <?php echo CHtml::link('<span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>', array('site/contact')); ?>
                            </div>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <div class="socialArea clearfix">
                                <h5>Find us on:</h5>
                                <ul class="list-inline ">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div><!-- social -->
                            <div class="contactNo clearfix">
                                <h5>Call us on:</h5>
                                <p>+8802 9552854<br />+8802 9562502</p>
                            </div><!-- contactNo -->
                        </div><!-- col-sm-3 col-xs-6 -->

                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div>
            <!-- menuFooter -->

            <!-- footer -->
            <div class="footer clearfix">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-sm-8 col-xs-12 copyRight">
                            <p>Copyright &copy; <?php echo Yii::app()->name; ?> <?php echo date('Y'); ?>. Designed and developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></p>
                        </div><!-- col-sm-6 col-xs-12 -->
                        <div class="col-sm-4 col-xs-12 privacy_policy">
                            <?php echo CHtml::link('Contact us', array('site/contact')); ?>
                        </div><!-- col-sm-6 col-xs-12 -->
                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- end footer -->

        </div>
        <!-- JQUERY SCRIPTS -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.flexslider.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.selectbox-0.1.3.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.magnific-popup.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/waypoints.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.counterup.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/wow.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/navbar.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/moment.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/fullcalendar.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/options/optionswitcher.js"></script>
        <script src="<?php //echo Yii::app()->theme->baseUrl;          ?>/js/custom.js"></script>
    </body>
</html>