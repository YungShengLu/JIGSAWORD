<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">

<style type="text/css">
    #map_hidden {
        display: none;
    }
</style>

<head>
    <title>Jigsawords</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Plugin CSS -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/plugin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/plugin/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/user_page.css">

    <!-- Plugin JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <script src="js/plugin/jquery.js"></script>
    <script src="js/plugin/bootstrap.min.js"></script>
    <script src="js/plugin/classie.js"></script>
    <script src="js/plugin/cbpAnimatedHeader.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/core.js"></script>
    <script src="js/user_page.js"></script>

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container" id="navbar-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand brand" id="header" href="#page-top">JIGSAWORDS</a>
            </div>
            <br><br><br>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Game</a>
					</li>

					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Score</a>
					</li>

					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Develop</a>
					</li>

					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Personal</a>
					</li>

					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Word Bank</a>
					</li>

					<li class="navbar-page" id="game_tab">
						<a class="navbar navbar-link tab_link" href="#">Sign out</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<div class="container" id="main_container">
		<!-- load by AJAX -->
	</div><!-- /container -->

	<footer class="container-fluid text-center">
		<div class='footer-copyright'>
			<strong>Copyright &copy;</strong>
			<br>
			2015 National Chung Kung University Computer Science and Information Egineering.
			<div class='footer-background'>WEB APPLICATION AND PROGRAMMING</div>
		</div>
	</footer>
    <span id="map_hidden"></span>

</body>

</html>