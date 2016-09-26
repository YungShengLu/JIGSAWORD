$(document).ready(function(){
	$.post( "modifyWordBank.php",{
			command: "get"
		}, function(data, status){
			var wordbank_info = $.parseJSON(data);
			wordbank_info.wordlist = JSON.parse(wordbank_info.wordlist);

			for(var i=0; i<wordbank_info.wordlist.length; i++) {
				$("#wordbank_tbody").append("<tr class='wordrow' id='r1'> \
				    		<td class='word'>"+ wordbank_info.wordlist[i] +"</td> \
				    		<td class='chinese'> \
				    			<button class='btn btn-info con_btn'>Show</button> \
				    		</td> \
				    		<td class='addedtime'>"+ wordbank_info.date +"</td> \
				    		<td class='action'> \
				    			<button class='btn btn-danger delete_btn'>Delete</button> \
				    		</td> \
				    	</tr>");
			}

			$(".delete_btn").click(function(){
				var this_btn = $(this);
				var word = this_btn.parent().siblings().eq(1).html();
				$.post( "modifyWordBank.php",{
						command: "delete",
						word: word
					}, function(data, status){
						 this_btn.parent().parent().remove();
					});
			});

			$(".con_btn").click(function(){
				var this_btn = $(this);
				var word = this_btn.parent().siblings().html();
				$.get( "dictionary.php",{
						command: "mean",
						word: word
					}, function(data, status){
						 alert(data);
					});
			});
		});
});