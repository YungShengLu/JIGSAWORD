<?php
  include('updatepassword.php'); 
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Jigsawords</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/user_page.js"></script>
  </head>

  <body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">JIGSAWORDS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="navbar-page" id="game_tab">
                    <a class="navbar navbar-link tab_link" href="#">Personal</a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
    	<div class="container card-container">
            <div class="row">
                <div class="col-lg-12">
                    <p id="title">Change password</p>
                    <hr class="star-light">
                    <br>
                    <form class="form-signin" action="updatepassword.php" method="post">
                    <span id="reauth-email" class="reauth-email"></span>  
                    <table class="account-table">
                    <tbody class="account-table-body">

                      <tr>
                        <td><p id="hint"> Current password</p></td>
                        <td class="content">
                          <p class="account account-currentpass">
                          <input name="currentpass" type="text" id="inputCurrentPass" class="form-control" placeholder="Current password" required>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <td><p id="hint"> New password</p></td>
                        <td class="content">
                          <p class="account account-newpass">
                          <input name="newpass" type="text" id="inputNewPass" class="form-control" placeholder="New password" required>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <td><p id="hint"> Confirm password</p></td>
                        <td class="content">
                          <p class="account account-confirmpass">
                          <input name="conformpass" type="text" id="inputConfirmPass" class="form-control" placeholder="Confirm password" required>
                          </p>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <br>
                  <button name="submit" class="btn-outline btn-lg btn-update" id="submit" type="submit">Update</button>
                </form>
            </div>
        </div>
    </header>


    <footer class="container-fluid text-center">
      <div class='footer-copyright'>
        <strong>Copyright &copy; David Lu</strong>
        <br>
        2015 National Chung Kung University Computer Science and Information Egineering.
        <div class='footer-background'>WEB APPLICATION AND PROGRAMMING</div>
      </div>
    </footer>
  </body>

</html>