<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo Solution" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/elements.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo CHtml::link(Yii::app()->name, array('site/index'), array('class' => 'navbar-brand')); ?>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <?php echo CHtml::link('Home <b class="caret"></b>', array('site/index'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
                            <ul class="dropdown-menu">
                                <li><?php echo CHtml::link('Pofessional Life', array('content/view', 'id' => 1), array('class' => '')); ?></li>
                                <li><?php echo CHtml::link('Social Work', array('content/view', 'id' => 3), array('class' => '')); ?></li>
                            </ul>
                        </li>     
                        <li class="hidden-sm hidden-md">
                            <?php echo CHtml::link('Research Paper', array('content/index', 'id' => 2), array('class' => '')); ?>
                        </li> 
                        <li class="hidden-sm hidden-md">
                            <?php echo CHtml::link('Publications', array('content/index', 'id' => 3), array('class' => '')); ?>
                        </li>
                        <li class="hidden-sm hidden-md">
                            <?php echo CHtml::link('Press Clippings', array('content/index', 'id' => 4), array('class' => '')); ?>
                        </li>
                        <li class="dropdown">
                            <?php echo CHtml::link('Picture Gallery <b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
                            <ul class="dropdown-menu">
                                <?php $this->get_gallery_category(1); ?>
                            </ul>
                        </li>
                        <li class="hidden-sm hidden-md">
                            <?php echo CHtml::link('Video Gallery', array('video/index'), array('class' => '')); ?>
                        </li>
                        <li class="hidden-sm hidden-md">
                            <?php echo CHtml::link('Contact us', array('site/contact'), array('class' => '')); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">    
            <?php echo $content; ?>                
        </div>
        <!-- Foooter -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Contact Us  -->
                    <div class="col-sm-4">
                        <div class="headline"><h3>Contact Me</h3></div>
                        <div class="content">
                            <p>
                                0000, Motojheel<br />
                                Dhaka, 1000<br />
                                Phone: +0 000 000 00 00<br />
                                Fax: +0 000 000 00 00<br />
                                Email: <a href="#">info@mhmillat.com</a>
                            </p>
                        </div>
                    </div>
                    <!-- Social icons  -->
                    <div class="col-sm-4">
                        <div class="headline"><h3>Go Social</h3></div>
                        <div class="content social">
                            <p>Stay in touch with me:</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-vk"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Subscribe -->
                    <div class="col-sm-4">
                        <div class="headline"><h3>Subscribe</h3></div>
                        <div class="content">
                            <p>Enter your e-mail below to subscribe to our free newsletter.<br />We promise not to bother you often!</p>
                            <form class="form" role="form">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <label class="sr-only" for="subscribe-email">Email address</label>
                                            <input type="email" class="form-control" id="subscribe-email" placeholder="Enter email">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default">OK</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Legal  -->
        <div class="legal">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Copyright &copy; <?php echo Yii::app()->name; ?> <?php echo date('Y'); ?>. Designed and developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scrolltopcontrol.js"></script><!-- Scroll to top javascript -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/isotope/js/jquery.isotope.min.js"></script><!-- Isotope gallery -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/isotope-custom.js"></script><!-- Isotope gallery custom file-->
    </body>
</html> 