<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Quiz</title>

    <link href="<?php echo $this->webroot;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <?php
            echo $this->Html->meta('icon');
            //echo $this->Html->css('cake.generic');
            echo $this->Html->css(array('bootstrap','normalize', 'stylish-portfolio'));

            echo $this->Html->script(array('jquery','bootstrap', 'modernizr.custom', 'svgcheckbx', 'custom'));
        ?>
        
        <?php
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>


    <!--Calling the content of the body  -->
        <?php echo $this->fetch('content'); ?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<div class="pull-right">
	                	<ul class="list-inline social_logo">
	                        <li>
	                            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
	                        </li>
	                    </ul>
                	</div>
                	<div class="pull-left">
                		<p class="">Copyright &copy; Online Quiz Test-2016</p>
                	</div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
