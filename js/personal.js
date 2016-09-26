$(document).ready(function(){
	loadPersonalInfo();

	const confirm_fail_msg = "Sorry, Confirm password isn't same as new one.";
	const wrong_password_msg = "Sorry, Your password is wrong!";
	const success_msg = "Your password is changed!";

	$("#personal_form").submit(function(e){
		e.preventDefault();
		$("#changePWD_modal").modal();
	});

	$("#savePWD_btn").click(function(){
		$("#personal_alert").hide();

		var password = $("#cur_pass").val();
		var new_password = $("#new_pass").val();
		var con_password = $("#con_pass").val();

		if(new_password != con_password) {
			cleanAlertClass();
			$("#personal_alert").addClass("alert-warning").html(confirm_fail_msg).show(400);
			return true;
		}

		$.post( "modifyPersonal.php",{
				 command: "update_pwd",
				 new_password: new_password,
				 password: password
			}, function(data, status){
				if(data=='true')
					$("#personal_alert").addClass("alert-success").html(success_msg).show(400);
				else
					$("#personal_alert").addClass("alert-warning").html(wrong_password_msg).show(400);
				$("#changePWD_modal").find("input").val("");
			});
	});

	$("#closePWD_btn").click(function(){
		$("#changePWD_modal").find("input").val("");
	});

	function cleanAlertClass() {
		$("#personal_alert").removeClass("alert-success").removeClass("alert-warning");
	}

	function loadPersonalInfo () {
		var personal_info;
		$.post( "modifyPersonal.php",{
				command: "get"
			}, function(data, status){
				 personal_info = $.parseJSON(data);
				 $("#account_name").html(personal_info.name);
				 $("#account_email").html(personal_info.email);
				 $("#account_last").html(personal_info.lscore);
				 $("#account_best").html(personal_info.hscore);
				 $("#account_register").html(personal_info.register);
			});
	}
});