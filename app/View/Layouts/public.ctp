<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Quiz</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />-->
	<!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

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

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <button type="button" class="btn btn_user  btn_signup" data-toggle="modal" data-target="#signup">SIGNUP</button>
            <button type="button" class="btn btn_user btn_login" data-toggle="modal" data-target="#login">LOGIN</button>

            <!-- Modal -->
            <div id="signup" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content Signup-->
                <div class="modal-content">
                	<div class="modal-header">
                        <button type="button" class="close" style="font-size: 50px;" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">SIGNUP</h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#" role="form">
                            <div class="form-group">
                                <label class="control-label" for="first anme">First Name:</label>
                                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Last Nmae">Last Name:</label>
                                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="status">Status:</label>
                                <select name="status" class="form-control">
                                    <option>Select Status</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="confirm password">Confirm Password:</label>
                                <input type="password" name="con_pass" class="form-control" id="con_pass" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn_user  btn_signup">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div> 
                </div>

                </div>
            </div>

            <!-- Modal Login -->
            <div id="login" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" style="font-size: 50px;" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">LOGIN</h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#" role="form">
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn_user  btn_signup">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </header>


    <!-- Trigger the modal with a button -->


    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn_user"  href="quiz_page.html">START QUIZ</a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                	<div class="pull-right">
	                	<ul class="list-inline">
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
