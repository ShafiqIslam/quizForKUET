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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">


    <?php
            echo $this->Html->meta('icon');
            //echo $this->Html->css('cake.generic');
            echo $this->Html->css(array('bootstrap','normalize', 'stylish-portfolio'));
            echo $this->Html->script(array('jquery','bootstrap','slider', 'modernizr.custom', 'bootstrap-formhelpers-phone'));
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
    <?php if(!empty($is_logged)) { ?>
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="<?php echo $this->webroot;?>exams/new">Menu</a>
                </li>
                <li>
                    <a href="<?php echo $this->webroot;?>exams/new">Create new quiz</a>
                </li>
                <li>
                    <a href="<?php echo $this->webroot;?>emams/my_exams">My quizzes</a>
                </li>
                <li>
                    <a href="<?php echo $this->webroot;?>teachers/logout">Logout</a>
                </li>
            </ul>
        </nav>
    <?php } ?>


    <?php $flash = $this->Session->flash('flash'); ?>
    <?php if(!empty($flash)) { ?>
        <div class="container flash_message">
            <?php echo $flash;?>
            <button class="flash_close_btn"><span><i class="fa fa-times fa-2x"></i></span></button>
        </div>
    <?php } ?>


    <!--Calling the content of the body  -->
    <?php echo $this->fetch('content'); ?>
    <!-- Footer -->

    <?php echo $this->Html->script(array('bootstrapValidator.min', 'validator.min', 'custom')); ?>
</body>
</html>
