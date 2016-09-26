<link rel="stylesheet" href="css/account.css"> 

<div class="card card-container">
  <p id="subtitle">Account information</p>
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
</div><!-- /card-container