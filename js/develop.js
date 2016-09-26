$(document).ready(function(){
	$("#develop_form").submit(function(e){
		e.preventDefault();
		/* get map */
		var map = [];
		var inputs = $("#develop_table").find("input");
		for(var i=0; i<inputs.length; i++)
			map.push(inputs.eq(i).val());

		/* get answer */
		var ans = [];

		$.post( "modifyMap.php",{
				command: "add",
				map: map,
				answer: ans
			}, function(data, status){
				 $("#develop_success_alert").show(400);
			});
	});

	$(".matrix_element").blur(function(){
		var ch = $(this).val();
		$(this).val(ch.toUpperCase());
	});

	$(".matrix_element").focus(function(){
		$(this).val("");
	});	
});