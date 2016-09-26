
$(function() {
    var map_info;
    /* init map */
    $.post( "modifyMap.php",{
            command: "get"
        }, function(data, status){
             map_info = $.parseJSON(data);
             var k=0;
             for(var i=0; i<4; i++)
                for(var j=0; j<4; j++)
                    $("#s"+i+j).html("<h1>"+map_info.map[k++]+"</h1>");
            $("#map_hidden").html(map_info.id);
        });

    const default_bg = "#18bc9c";
    const pressed_bg = "#fff";

    var word_history = [];
    var leftButtonDown = false;

    var used = new Array(16);
    var track = [];

    $(".block").mousedown(function(e) {
        // Left mouse button was pressed, set flag
        if (e.which === 1) 
            leftButtonDown = true;

        /* You can track the index of 2D array with var x, y */
        // Notice: this method require id format = s11, s12...
        var this_id = $(this).attr("id"); 
        var x = this_id.charAt(1);
        var y = this_id.charAt(2);
        x -= '0', y -= '0';
        // alert("You click s" +x+y);

        /* set used */
        used[x * 4 + y] = true;

        /* create word tracker */
        track = []; // clear array
        track.push({
            letter: $(this).children().html(),
            id: $(this).attr('id'),
            x: x,
            y: y
        });

        /* Change bg-color when pressed */
        $(this).css("color", default_bg);
        $(this).css("background", pressed_bg);

    });
                    
    $(".block").mouseover(function() {
        if (leftButtonDown) {
            if ($(this).attr('id') == track[track.length-1].id) {    
                // prevent multi press
            }
            else if (isValid($(this))) { 
                // Prevent cheating out side || backmove
                        
                /* Change bg-color when pressed */
                $(this).css("color", default_bg);
                $(this).css("background", pressed_bg);
                var this_id = $(this).attr("id"); 
                var x = this_id.charAt(1);
                var y = this_id.charAt(2);
                x -= '0', y -= '0';
                        
                used[x*4+y] = true;
                track.push({
                    letter: $(this).children().html(),
                    id: $(this).attr('id'),
                    x: x,
                    y: y
                });
            }
            else {  //  cancel last
                if ($(this).attr('id') == track[track.length-2].id) {  // backmove
                    var last = track[track.length-1];
                    $("#"+last.id).css("color", pressed_bg);
                    $("#"+last.id).css("background", default_bg);
                    used[last.x*4+last.y] = false;
                    track.pop();
                }
            }
        }
    });
                    
    var add_score = 0;
    $("#game_header").mouseup(function(e) {
        // Left mouse button was released, clear flag
        if (e.which === 1) 
            leftButtonDown = false;
        
        e.which = 0;

        var word = "";
        for (var i in track) {
            word += track[i].letter;
        }
                
        if (word.length < 3) {
            $("#select_word").html(word);
            $("#select_word").css("color", "red");
        }
        else {
            /* check map cache */
            var ans = map_info.answer;
            for(var i=0; i<ans.length; i++)
                if(ans[i]==word) {
                    exist_reponse(word);
                    cleanSelect();
                    return true;
                }

            /* lookup dictionary */
            $.get( "dictionary.php", {
                command: "exist",
                word: word
            }, function(data, status) {
                if(data=="true") {
                    exist_reponse(word);
                    $.post( "modifyMap.php",{
                            command: "update_ans",
                            answer: word,
                            id: map_info.id
                        }, function(data, status){
                             //Call back
                        });
                }
                else
                    $("#select_word").css("color", "red");

                $("#select_word").html(word);
            });

            function exist_reponse (word) {
                $("#select_word").html(word);
                $("#select_word").css("color", "green");
                        
                if($("#word-list").val()=="") {
                    $("#word-list").append(word);
                    add_score += 13*word.length;
                }
                else {
                    if(word_history.indexOf(word)==-1) {    // not used before
                        $("#word-list").append("\n"+word);
                        $("#word-list").animate({
                            scrollTop:$("#word-list")[0].scrollHeight - $("#word-list").height()},400);
                        add_score += 13*word.length;
                    }
                }
                $("#score_pill").html(add_score);
                word_history.push(word);
            }

        }

        cleanSelect();
    });
                    
    function tweakMouseMoveEvent(e) {
        // If left button is not set, set which to 0
        // This indicates no buttons pressed
        if (e.which === 1 && !leftButtonDown) 
            e.which = 0;
    }

    $(document).mousemove(function(e) {
        tweakMouseMoveEvent(e);
        $('#which_flag').text(e.which);
    });

    /* Help function */        
    function isValid (cur) {
        var id_str = cur.attr("id"); 
        var cx = id_str.charAt(1);
        var cy = id_str.charAt(2);

        id_str = track[track.length-1].id;
        var lx = id_str.charAt(1);
        var ly = id_str.charAt(2);

        if (Math.abs(cx-lx) > 1 || Math.abs(cy-ly) > 1)
            return false;
                        
        cx -= '0', cy -= '0';
                
        /* check used */
        if (used[cx * 4 + cy] == true)
            return false;
        else
            return true;
    }

    function cleanSelect () {
        /* reset all color */
        $(".block").css("color", pressed_bg);
        $(".block").css("background", default_bg);

        /* init used[][] and set */
        for (var i = 0; i < 4; i++)
            for (var j = 0; j < 4; j++)
                used[i * 4 + j] = false;
    }
});

function countdown(minutes) {
    var seconds = 60;
    var mins = minutes;

    function tick() {
        var counter = document.getElementById("clock");
        var current_minutes = mins - 1;

        seconds--;
        counter.innerHTML = (mins < 10 ? "0" : "") + current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        
        if (seconds > 0) 
            setTimeout(tick, 1000);
        else {
            if (mins > 1) 
                setTimeout(function () { countdown(mins - 1); }, 1000);
           else  
                gameover();
        }
    }

    tick();
}

function gameover () {
    var score = $("#score_pill").html();
    var new_record = "";
    $.post( "modifyPersonal.php",{
            command: "update_score",
            score: score
        }, function(data, status) {
            if (data == "true") {
                new_record = "O";
            }
            else {
                new_record = "X";
            }

            $("#main_container").load("gameover.php", {
                score: score,
                new_record: new_record
            });
        });
}

countdown(2);
