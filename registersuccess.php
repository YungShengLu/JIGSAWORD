<!DOCTYPE html>

<?php
  session_start();
?>

<html lang="en">
<head>
  <title>Jigsawords</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/register.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                    <li class="navbar-page page-scroll">
                        <a href="index.php">Sign in</a>
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
                    <p id="success">Successfully!</p>
                    <hr class="star-light">
                    <br>
                    <span id="reauth-email" class="reauth-email"></span>  
                    <table class="account-table">
                    <tbody>
                      <tr>
                        <td><p id="hint"> Name</p></td>
                        <td class="content">
                          <p class="account account-name">
                          <?php
                            include "./config.inc.php";
               
                            $register = $_SESSION['register_user'];

                            $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
                            $row = mysql_fetch_array($query);

                            echo $row['name'];
                          ?>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p id="hint"> Password</p></td>
                        <td class="content">
                          <p class="account account-password">
                          <?php
                            include "./config.inc.php";
                            $register = $_SESSION['register_user'];

                            $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
                            $row = mysql_fetch_array($query);

                            echo $row['password'];
                          ?>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p id="hint"> Email</p></td>
                        <td class="content">
                          <p class="account account-email">
                          <?php
                            include "./config.inc.php";
                            $register = $_SESSION['register_user'];

                            $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
                            $row = mysql_fetch_array($query);

                            echo $row['email'];
                          ?>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td><p id="hint"> Register</p></td>
                        <td class="content">
                          <p class="account">
                          <?php
                            include "./config.inc.php";

                            $register = $_SESSION['register_user'];

                            $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
                            $row = mysql_fetch_array($query);

                            echo $row['register'];
                          ?>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <button name="submit" class="btn btn-outline btn-lg btn-primary btn-block btn-register" id="submit" type="submit" onclick="signin()">Sign in</button>
                  <script>
                    function signin() {
                      window.location = "index.php";
                    }
                  </script>
                </div>
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