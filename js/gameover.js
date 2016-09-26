$(document).ready(function(){
	$.get( "modifyScore.php",{
			command: "gethscore"
		}, function(data, status){
			 var hscore = $.parseJSON(data);
			 $("#best_score").html(hscore);
		});

	var id = $("#map_hidden").html();
	$.post( "modifyMap.php",{
            command: "getIdAns",
            id: id
        }, function(data, status){
             var ans = $.parseJSON(data);
             ans = JSON.parse(ans);
             console.debug(ans);
             for(var i=0; i<ans.length; i++) {
	             $("#words_list").append("<div> \
	                                	<span class='inner_words'>"+ans[i]+"</span> \
	                                	<button type='button' class='btn btn-primary btn-sm add_btns'>Add</button> \
	                                </div>");
             }

             $(".add_btns").click(function(){
             	var add_word = $(this).siblings().html();
             	var words = [];
             	words.push(add_word);

             	$.get( "dictionary.php",{
             			command: "mean",
             			word: add_word
             		}, function(data, status){
             			var means = [];
             			means.push(data);

             			 $.post( "modifyWordBank.php",{
             			 	command: "add",
	             			 words: words,
	             			 means: means
	             		}, function(data, status){
	             			alert("Success");
	             		});
             		});
             });
        });

	$("#again_btn").click(function(){
		$("#main_container").load("gamestart.php", function(){
            $("#gamestart_container").hide().fadeIn(1000);
        });
	});

	$("#rank_btn").click(function(){
		$("#main_container").load("score.php");
	});
});