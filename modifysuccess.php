<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bookmark: Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="account.css">
  <link rel="stylesheet" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="profile.php">Bookmark</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="passive"><a class="navbar-link" href="profile.php">Home</a></li>
        <li class="active"><a class="navbar-link" href="account.php">Account</a></li>
        <li class="passive"><a class="navbar-link" href="favorite.php">Favorite</a></li>
        <li class="passive"><a class="navbar-link" href="search.php">Favorite</a></li>
      </ul>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-link" href="logout.php"><span class="glyphicon glyphicon-flag"></span> Sign out</a></li>
      </ul>
    </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card card-container">
    <p id="subtitle">Modify successfully!</p>
    <form class="form-signin" action="modifyaccount.php" method="post">
    <span id="reauth-email" class="reauth-email"></span>  
    <table>
      <tbody>
        <tr>
          <td><p id="hint"> Name</p></td>
          <td id="content-name">
            <p class="account account-name">
            <?php
              include "./config.inc.php";
              $user = $_SESSION['login_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$user'", $link);
              $row = mysql_fetch_array($query);

              echo $row['name'];
            ?>
            </p>
          </td>
          <td id="edit">
            <button name="edit" id="btn-name" type="button" class="btn btn-warning">Edit</button>
            <script>
              $(document).ready(function() {
                  $("#btn-name").click(function() {
                    $(".account-name").remove();
                    $("#btn-name").remove();
                    $("#content-name").append('<input name="username[]" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>');
                  });
              });
            </script>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Password</p></td>
          <td id="content-password">
            <p class="account account-password">
            <?php
              include "./config.inc.php";
              $user = $_SESSION['login_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$user'", $link);
              $row = mysql_fetch_array($query);

              echo $row['password'];
            ?>
            </p>
          </td>
          <td id="edit">
            <button name="edit" id="btn-password" type="button" class="btn btn-warning">Edit</button>
            <script>
              $(document).ready(function() {
                  $("#btn-password").click(function() {
                    $(".account-password").remove();
                    $("#btn-password").remove();
                    $("#content-password").append('<input name="password[]" type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>');
                  });
              });
            </script>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Email</p></td>
          <td>
            <p class="account account-email">
            <?php
              include "./config.inc.php";
              $user = $_SESSION['login_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$user'", $link);
              $row = mysql_fetch_array($query);

              echo $row['email'];
            ?>
            </p>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Register</p></td>
          <td>
            <p class="account">
            <?php
              include "./config.inc.php";
              $user = $_SESSION['login_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$user'", $link);
              $row = mysql_fetch_array($query);

              echo $row['register'];
            ?>
            </p>
          </td>
        </tr>
      </tbody>
    </table>

    <br>
    <button name="update" class="btn btn-lg btn-primary btn-block btn-modify" id="submit" type="submit">Update
    </button>  
    </form><!-- /form -->
  </div><!-- /card-container -->
</div><!-- /container -->

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