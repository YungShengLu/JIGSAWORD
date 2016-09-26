<!-- Custom CSS -->
<link href="css/block.css" rel="stylesheet">
<link href="css/game.css" rel="stylesheet">

<!-- Custom JavaScript -->
<link rel="stylesheet" href="css/plugin/animsition.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/game.js"></script>

<!-- Header -->
<header id="game_header">
    <div class="container game-container" display="none">
        <div class="row">
            <div class="game-title">
                <h1 class="game_title">Word is power!</h1>
                <hr class="star-light">
            </div>

            <br>

            <table id="other-table">
                <tr>
                    <td id="clock_tab">Left time</td>
                    <td id="clock_pill"><span id="clock">00:02</span></td>

                    <td id="score_tab">Score</td>
                    <td id="score_pill">0</td>
                </tr>
            </table>

            <table id="game-table">
                <tr>
                    <td class="game-panel" rowspan="2">
                         <div class="game-table">
                            <div class="block1 block" id="s00">
                                <h1></h1>
                            </div>

                            <div class="block1 block" id="s01">
                                <h1></h1>
                            </div>

                            <div class="block1 block" id="s02">
                                <h1></h1>
                            </div>

                            <div class="block1 block" id="s03">
                                <h1></h1>
                            </div><br>

                            <div class="block2 block" id="s10">
                                <h1></h1>
                            </div>

                            <div class="block2 block" id="s11">
                                <h1></h1>
                            </div>

                            <div class="block2 block" id="s12">
                                <h1></h1>
                            </div>

                            <div class="block2 block" id="s13">
                                <h1></h1>
                            </div><br>

                            <div class="block3 block" id="s20">
                                <h1></h1>
                            </div>

                            <div class="block3 block" id="s21">
                                <h1></h1>
                            </div>
                
                            <div class="block3 block" id="s22">
                                <h1></h1>
                            </div>

                            <div class="block3 block" id="s23">
                                <h1></h1>
                            </div><br>

                            <div class="block4 block" id="s30">
                                <h1></h1>
                            </div>

                            <div class="block4 block" id="s31">
                                <h1></h1>
                            </div>

                            <div class="block4 block" id="s32">
                                <h1></h1>
                            </div>
                
                            <div class="block4 block" id="s33">
                                <h1></h1>
                            </div>
                        </div>
                    </td>

                    <td class="list-panel">
                        <form role="form">
                            <div class="panel">
                                <div class="panel-heading">History list</div>
                                <textarea class="form-control" rows="9" id="word-list" readOnly></textarea>
                            </div>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td class="find-panel">
                        <div class="panel">
                            <div class="panel-heading">Your word</div>
                            <div class="panel-body"><span id="select_word"></span></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</header>