$(document).ready(function() {
    // load home page by default
    $("#main_container").load("gamestart.php", function(){
        $("#gamestart_container").hide().fadeIn(1000);
    });

    var last_tab = $("#game_tab");

    $(".tab_link").click(function() {
        var tab_name = $(this).html();
        last_tab.removeClass("active").addClass("passive");

        if (tab_name == "Game") {
            $("#main_container").load("gamestart.php", function(){
                $("#gamestart_container").hide().fadeIn(1000);
            });
        }
        else if (tab_name == "Score") {
            $("#main_container").load("score.php");
        }
        else if (tab_name == "Personal") {
            $("#main_container").load("personal.php");
        }
        else if (tab_name == "Develop") {
            $("#main_container").load("develop.php");
        }
        else if (tab_name == "Sign out") {
            window.location.assign("index.php");
        }
        else if (tab_name == "Word Bank") {
            $("#main_container").load("wordbank.php")
        }

        last_tab = $(this).parent();
        last_tab.removeClass("passive").addClass("active");
    });

    $("#title_link").click(function() {
        last_tab.removeClass("active").addClass("passive");
        $("#main_container").load("game.php");

        last_tab = $("#game_tab");
        $("#game_tab").removeClass("passive").addClass("active");
    });
});
