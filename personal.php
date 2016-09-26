  <?php
	include('changepassword.php'); 
  ?>

	<link href="css/register.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/personal.css">
	<script type="text/javascript" src="js/personal.js"></script>

	<header>
	  <div class="container card-container">
	  		<br><br><br><br><br><br><br><br><br>
			<div class="row">
				<div class="col-lg-12">
					<p id="title">Account information</p>
					<hr class="star-light">
					<br>
					<form class="form-signin" id="personal_form">
					<span id="reauth-email" class="reauth-email"></span>  
					<table class="account-table">
					<tbody class="account-table-body">
					  <tr>
						<td><p id="hint"> Name</p></td>
						<td class="content">
						  <p class="account account-name" id="account_name">
							<!-- AJAX post method -->
						  </p>
						</td>
					  </tr>

					  <tr>
						<td><p id="hint"> Email</p></td>
						<td class="content">
						  <p class="account account-email" id="account_email">
							<!-- AJAX post method -->
						  </p>
						</td>
					  </tr>

					  <tr>
						<td><p id="hint"> Register</p></td>
						<td class="content">
						  <p class="account" id="account_register">
							<!-- AJAX post method -->
						  </p>
						</td>
					  </tr>

					  <tr>
						<td><p id="hint"> Last Score</p></td>
						<td class="content">
						  <p class="account" id="account_last">
							<!-- AJAX post method -->
						  </p>
						</td>
					  </tr>

					  <tr>
						<td><p id="hint"> Best</p></td>
						<td class="content">
						  <p class="account" id="account_best">
							<!-- AJAX post method -->
						  </p>
						</td>
					  </tr>

					</tbody>
				  </table>
				  <br>
				  <button name="submit" class="btn-outline btn-lg btn-change" type="submit">Change password</button>
				</form>
				</div>
			</div>
			<div class="alert alert-success" role="alert" id="personal_alert"></div>
		</div>
	</header>

	<div class="modal fade" id="changePWD_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Change Password</h4>
				</div>
				<div class="modal-body">
			    	<div class="container card-container">
			            <div class="row">
			                <div class="col-lg-12">
			                    <br>
			                    <form class="form-signin" action="updatepassword.php" method="post">
			                    <span id="reauth-email" class="reauth-email"></span>  
			                    <table class="account-table">
				                    <tbody class="account-table-body">
					                    <tr>
					                        <td><p> Current password</p></td>
					                        <td class="content">
					                        	<p class="account account-currentpass">
					                        	<input id="cur_pass" name="currentpass" type="password" id="inputCurrentPass" class="form-control" placeholder="Current password" required>
					                        	</p>
					                        </td>
					                    </tr>
					                    <tr>
					                        <td><p> New password</p></td>
					                        <td class="content">
					                        	<p class="account account-newpass">
					                        	<input id="new_pass" name="newpass" type="password" id="inputNewPass" class="form-control" placeholder="New password" required>
					                        	</p>
					                        </td>
					                    </tr>
					                    <tr>
					                        <td><p> Confirm password</p></td>
					                        <td class="content">
					                            <p class="account account-confirmpass">
					                            <input id="con_pass" name="conformpass" type="password" id="inputConfirmPass" class="form-control" placeholder="Confirm password" required>
					                            </p>
					                        </td>
					                    </tr>
				                    </tbody>
			                    </table>
			                </form>
			            </div>
			        </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" id="closePWD_btn">Close</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="savePWD_btn">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>