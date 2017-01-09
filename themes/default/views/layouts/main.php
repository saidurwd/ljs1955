<?php //echo CHtml::encode(Yii::app()->name);   ?>        
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
                <div class="option-switcher-heading">Template Options</div>            
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
                                        <a class="navbar-brand logo clearfix" href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" alt="" class="img-responsive" /></a>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="main-nav">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li class="dropdown list-inline">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid View</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="course-grid-3col.html">3 Columns</a></li>
                                                            <li><a href="course-grid-4col.html">4 Columns</a></li>
                                                            <li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
                                                            <li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses List View</a>
                                                        <ul  class="dropdown-menu">
                                                            <li><a href="course-right-sidebar.html">Sidebar Right</a></li>
                                                            <li><a href="course-left-sidebar.html">Sidebar Left</a></li>
                                                            <li><a href="course-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Course</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="single-course-right-sidebar.html">Sidebar Right</a></li>
                                                            <li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
                                                            <li><a href="single-course-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy Course</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="buying-steps.html">Payment</a></li>
                                                            <li><a href="buying-confirmation.html">Confirmation </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about.html">About College</a></li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
                                                            <li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply Now</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="buying-steps.html">Apply For Addmission</a></li>
                                                            <li><a href="buying-confirmation.html">Confirmation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices Table</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="price-table-3col.html">Prices 3 column</a></li>
                                                            <li><a href="price-table-4col.html">Prices 4 column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="campus.html">Our Campus</a></li>
                                                    <li><a href="stuff.html">Stuff</a></li>
                                                    <li><a href="international_students.html">International Students</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                    <li><a href="404-error.html">404 Not Found</a></li>
                                                    <li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog Sidebar Left</a></li>
                                                    <li><a href="single-post-right-sidebar.html">Single Post Sidebar Right</a></li>
                                                    <li><a href="single-post-left-sidebar.html">Single Post Sidebar Left</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="events-3col.html">Events 3 Columns</a></li>
                                                    <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                                                    <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                                                    <li><a href="single-events.html">Single Event</a></li>
                                                    <li><a href="events-calendar.html">Events Callender</a></li>
                                                </ul>
                                            </li>
                                            <li class="apply_now"><a href="buying-steps.html">Apply Now</a></li>
                                        </ul>
                                    </div><!-- navbar-collapse -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                </nav><!-- navbar -->
            </div>

            <div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
                <div class="slides carousel-inner">
                    <div class="item active">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/slider_image_1.jpg" alt="" />
                        <div class="banner_caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="caption_inner animated fadeInUp">
                                            <h1>Welcome To Royal College</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                            <a target="_blank" href="https://goo.gl/0doAl6">Buy Now</a>
                                        </div><!--end caption_inner-->
                                    </div>
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end banner_caption-->
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/slider_image_2.jpg" alt="" />
                        <div class="banner_caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="caption_inner animated fadeInUp">
                                            <h1>Admission going on</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                            <a target="_blank" href="https://goo.gl/0doAl6">Buy Now</a>
                                        </div><!--end caption_inner-->
                                    </div>
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end banner_caption-->
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/slider_image_3.jpg" alt="" />
                        <div class="banner_caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="caption_inner animated fadeInUp">
                                            <h1>Arrange a tour to our college</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                            <a target="_blank" href="https://goo.gl/0doAl6">Buy Now</a>
                                        </div><!--end caption_inner-->
                                    </div>
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end banner_caption-->
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/slider_image_4.jpg" alt="" />
                        <div class="banner_caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="caption_inner animated fadeInUp">
                                            <h1>Find your dream course</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                            <a target="_blank" href="https://goo.gl/0doAl6">Buy Now</a>
                                        </div><!--end caption_inner-->
                                    </div>
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end banner_caption-->
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/prev.png">
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/slider/next.png">
                </a>    
            </div><!--end banner-->

            <div class="aboutArea">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xs-12">
                            <div class="aboutTitle">
                                <h2>Our Popular Courses</h2>
                            </div><!-- aboutTitle -->
                        </div><!-- col-sm-3 col-xs-12 -->
                    </div><!-- row clearfix -->

                    <div class="about_inner clearfix">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    <a href="single-course-right-sidebar.html"> 
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/learn/learn_1.jpg" alt="" class="img-responsive" />
                                        <div class="overlay">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis.</p>
                                        </div>
                                        <span class="captionLink">English Literature<span></span></span>
                                    </a>
                                </div><!-- aboutImage -->
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    <a href="single-course-right-sidebar.html"> 
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/learn/learn_2.jpg" alt="" class="img-responsive" />
                                        <div class="overlay">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis.</p>
                                        </div>
                                        <span class="captionLink">Business Administration<span></span></span>
                                    </a>
                                </div><!-- aboutImage -->
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    <a href="single-course-right-sidebar.html"> 
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/learn/learn_3.jpg" alt="" class="img-responsive" />
                                        <div class="overlay">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis.</p>
                                        </div>
                                        <span class="captionLink">Computer Science<span></span></span>
                                    </a>
                                </div><!-- aboutImage -->
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    <a href="single-course-right-sidebar.html"> 
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/learn/learn_4.jpg" alt="" class="img-responsive" />
                                        <div class="overlay">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis.</p>
                                        </div>
                                        <span class="captionLink">Mathematics<span></span></span>
                                    </a>
                                </div><!-- aboutImage -->
                            </div>
                        </div><!-- row -->
                    </div><!-- about_inner -->

                </div><!-- container -->
            </div><!-- aboutArea -->

            <div class="mainContent clearfix">
                <div class="container">
                    <div class="row clearfix">

                        <div class="col-sm-8 col-xs-12">
                            <div class="videoNine clearfix">

                                <div class="videoArea clearfix">
                                    <h3>Welcome To Royal College</h3>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7 col-xs-12 videoLeft">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/video_image.jpg" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                                        </div><!-- videoLeft -->
                                        <div class="col-lg-4 col-md-5 col-xs-12 videoRight">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                            <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                                        </div><!-- videoRight -->
                                    </div><!-- row -->
                                </div><!-- videoArea -->

                                <div class="related_post_sec single_post">
                                    <h3>Recent News</h3>
                                    <ul>
                                        <li>
                                            <span class="rel_thumb">
                                                <a href="single-post-right-sidebar.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/news/related_thumb_01.png" alt=""></a>
                                            </span><!--end rel_thumb-->
                                            <div class="rel_right">
                                                <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                                                <div class="meta">
                                                    <span class="author">Posted in: <a href="#">Update</a></span>
                                                    <span class="date">on: <a href="#">January 24, 2015</a></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                            </div><!--end rel right-->
                                        </li>
                                        <li>
                                            <span class="rel_thumb">
                                                <a href="single-post-right-sidebar.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/news/related_thumb_02.jpg" alt=""></a>
                                            </span><!--end rel_thumb-->
                                            <div class="rel_right">
                                                <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                                                <div class="meta">
                                                    <span class="author">Posted in: <a href="#">Exam</a></span>
                                                    <span class="date">on: <a href="#">January 24, 2015</a></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                            </div><!--end rel right-->
                                        </li>
                                    </ul>
                                </div><!--related_post_sec-->

                            </div><!--videoNine-->
                        </div><!-- col-sm-8 col-xs-12 -->

                        <div class="col-sm-4 col-xs-12">
                            <div class="formArea clearfix">
                                <div class="formTitle">
                                    <h3>Find a Course</h3>
                                    <p>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
                                </div><!-- formTitle -->
                                <form action="#" method="post">
                                    <div class="selectBox clearfix">
                                        <select name="guiest_id1" id="guiest_id1">
                                            <option value="0">Location</option>
                                            <option value="1">Location_1</option>
                                            <option value="2">Location_2</option>
                                            <option value="3">Location_3</option>            
                                        </select>
                                    </div><!-- selectBox -->
                                    <div class="selectBox clearfix">
                                        <select name="guiest_id2" id="guiest_id2">
                                            <option value="0">Level</option>
                                            <option value="1">Level_1</option>
                                            <option value="2">Level_2</option>
                                            <option value="3">Level_3</option>            
                                        </select>
                                    </div><!-- selectBox -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-block commonBtn">Search</button>
                                </form>
                            </div><!-- formArea -->
                            <div class="list_block related_post_sec">
                                <div class="upcoming_events">
                                    <h3>Upcoming Events</h3>
                                    <ul>
                                        <li class="related_post_sec single_post">
                                            <span class="date-wrapper">
                                                <span class="date"><span>24</span>January</span>
                                            </span>
                                            <div class="rel_right">
                                                <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                                <div class="meta">
                                                    <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                                    <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="related_post_sec single_post">
                                            <span class="date-wrapper">
                                                <span class="date"><span>24</span>January</span>
                                            </span>
                                            <div class="rel_right">
                                                <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                                <div class="meta">
                                                    <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                                    <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="related_post_sec single_post">
                                            <span class="date-wrapper">
                                                <span class="date"><span>24</span>January</span>
                                            </span>
                                            <div class="rel_right">
                                                <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                                <div class="meta">
                                                    <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                                    <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="events-3col.html" class="btn btn-default btn-block commonBtn">More Events</a>
                                </div>
                            </div><!-- end list_block -->
                        </div><!-- col-sm-4 col-xs-12 -->

                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- mainContent -->

            <div class="count clearfix wow fadeIn" data-wow-delay="100ms">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="text-center">
                                <div class="icon"><i class="fa fa-group"></i></div>
                                <div class="counter"> 
                                    <span class="timer">8298</span> 
                                </div>
                                <div class="seperator-small"></div>
                                <p>Students</p>
                            </div>
                        </div><!-- col-sm-3 -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="text-center">
                                <div class="icon"><i class="fa fa-book"></i></div>
                                <div class="counter"> 
                                    <span class="timer">142</span> 
                                </div>
                                <div class="seperator-small"></div>
                                <p>Courses</p>
                            </div>
                        </div><!-- col-sm-3 -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="text-center">
                                <div class="icon"><i class="fa fa-male"></i></div>
                                <div class="counter"> 
                                    <span class="timer">1047</span> 
                                </div>
                                <div class="seperator-small"></div>
                                <p>Stuffs</p>
                            </div>
                        </div><!-- col-sm-3 -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="text-center">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="counter"> 
                                    <span class="timer">10</span> 
                                </div>
                                <div class="seperator-small"></div>
                                <p>Locations</p>
                            </div>
                        </div><!-- col-sm-3 -->
                    </div><!-- row -->
                    <div class="count-bottom text-center">
                        <h1>Do you like this template?</h1>
                        <p>nec congue consequat risus, nec volutpat enim tempus id. Proin et sapien eget diam ullamcorper consectetur. Sed blandit imperdiet mauris. Mauris eleifend faucib</p>
                        <p>ipsum quis varius. Quisque pharetra leo erat, non eleifend nibh interdum quis.</p>
                        <a target="_blank" href="https://goo.gl/0doAl6" class="btn btn-default commonBtn">Buy now</a>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- count -->

            <div class="testimonial-section clearfix"> 
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="testimonial">
                                <div class="carousal_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                </div>
                                <div class="carousal_bottom">
                                    <div class="thumb">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/about/SARA-LISBON_Art-Student.jpg" alt="" draggable="false">
                                    </div>                    
                                    <div class="thumb_title">
                                        <span class="author_name">Sara Lisbon</span>
                                        <span class="author_designation">Student<a href="#"> English Literature</a></span>
                                    </div>
                                </div>
                            </div><!-- testimonial -->
                        </div><!-- col-xs-12 -->
                        <div class="col-xs-12 col-sm-6">
                            <div class="features">
                                <h3>Why Choose Us?</h3>
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i>It’s a complete solution for your college website</li>
                                    <li><i class="fa fa-check-circle-o"></i>PSD file included to help you customize the design better</li>
                                    <li><i class="fa fa-check-circle-o"></i>SASS file included for unlimited hasel free style customization</li>
                                    <li><i class="fa fa-check-circle-o"></i>Theme option switcher for live cusomization preview</li>
                                    <li><i class="fa fa-check-circle-o"></i>24/7 Support</li>
                                </ul>
                            </div>
                        </div><!-- col-xs-12 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- testimonial-section -->

            <div class="brand-section clearfix">
                <div class="container">
                    <div class="brand-slider flexslider">
                        <ul class="slides">
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand1.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand2.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand3.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand4.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand5.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand1.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand2.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand3.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand4.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand5.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand1.png" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/home/brand2.png" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- brand-section -->

            <div class="menuFooter clearfix">
                <div class="container">
                    <div class="row clearfix">

                        <div class="col-sm-3 col-xs-6">
                            <ul class="menuLink clearfix">
                                <li><a href="about.html">About Royal College</a></li>
                                <li><a href="campus.html">About Campus</a></li>
                                <li><a href="stuff.html">Staff Members</a></li>
                                <li><a href="about.html">Why Choose Us?</a></li>
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <ul class="menuLink clearfix">
                                <li><a href="course-fullwidth.html">All Courses</a></li>
                                <li><a href="buying-steps.html">Admission</a></li>
                                <li><a href="photo-gallery3col.html">Photo Gallery</a></li>
                                <li><a href="international_students.html">International Students</a></li>
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <div class="footer-address">
                                <h5>Location:</h5>
                                <address>
                                    Royal College<br>
                                    1727 Lombard St.<br>
                                    San Francisco
                                </address>
                                <a href="contact-us.html"><span class="place"><i class="fa fa-map-marker"></i>Main Campus</span></a>
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
                                <h3>012-3434-456768</h3>
                            </div><!-- contactNo -->
                        </div><!-- col-sm-3 col-xs-6 -->

                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- menuFooter -->

            <div class="footer clearfix">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-sm-6 col-xs-12 copyRight">
                            <p>© 2016 Copyright Royal College Bootstrap Template by <a href="http://www.iamabdus.com/">Abdus</a></p>
                        </div><!-- col-sm-6 col-xs-12 -->
                        <div class="col-sm-6 col-xs-12 privacy_policy">
                            <a href="contact-us.html">Contact us</a>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </div><!-- col-sm-6 col-xs-12 -->
                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- footer -->

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
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
    </body>
</html>