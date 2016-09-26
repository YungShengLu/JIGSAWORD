$(document).ready(function() {
    $("#game_start_btn").click(function(){
        $("#main_container").load("game.php");
    });

    $("#rule_btn").click(function(){
        $("#rule_modal").modal();
    });
});