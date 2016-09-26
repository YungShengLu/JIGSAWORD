<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bookmark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/stylesheet.css">

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

      <a class="navbar-brand" href="index.php">Bookmark</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a class="navbar-link" href="#">Register</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-link" href="index.php"><span class="glyphicon glyphicon-flag"></span> Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card card-container">
    <p id="subtitle">Register your Bookmark</p>
    <p id="validation"><span class="error">* Required field.</span></p>

    <form class="form-signin" action="registeraccount.php" method="post">
      <span id="reauth-email" class="reauth-email"></span>   
      <p id="hint"> Name<span class="error"> *</span></p>
      <input name="username" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
            
      <p id="hint"> Email<span class="error"> *</span></p>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address"  required>

      <p id="hint"> Password <span class="error"> *</span></p>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <p id="hint"> Confirm Password<span class="error"> *</span></p>
      <input name="confirmpassword" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm password" required>

      <br>

      <button name="submit" class="btn btn-lg btn-primary btn-block btn-register" id="submit" type="submit">Register</button>
      <button name="clear" class="btn btn-lg btn-primary btn-block btn-clr" id="clear" type="clear">Clear</button> 
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
