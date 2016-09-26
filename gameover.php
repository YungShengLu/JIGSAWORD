<!-- Gameover -->
<script src="js/gameover.js"></script>

<link href="css/gameover.css" rel="stylesheet">
<style type="text/css">
	.inner_words {
		color: blue;
	}

	.add_btns {
		margin-left: 2em;
	}
</style>

<header class="game animsition" id="gamestart_container">
    <div class="container start-container">
        <div class="row">
            <div class="game-title">
                <h1>Practice makes perfect!</h1>
                <hr class="star-light">
            </div>

            <br>

            <table>
                <tr>
                    <td class="list-panel" rowspan="4" id="words_container">
                        <form role="form">
                            <div class="panel">
                                <div class="panel-heading">Words list</div>
                                <div id="words_list">
                                	<!-- // insert by ajax -->
                                </div>
                            </div>
                        </form>
                    </td>

                    <td class="curr_score">
                        <div class="panel">
                            <div class="panel-heading">Score</div>
                            <div class="panel-body" id="curr_score">
                            	<?php 
                            		echo $_REQUEST['score'];
                            	 ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="best_score">
                        <div class="panel">
                            <div class="panel-heading">Best score</div>
                            <div class="panel-body" id="best_score"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="new_record">
                        <div class="panel">
                            <div class="panel-heading">New Record</div>
                            <div class="panel-body" id="new_record">
                            	<?php 
                            		echo $_REQUEST['new_record'];
                            	 ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <br><br>

            <div class="col-lg-12">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="form-group col-xs-12 animsition">
                            <a class="btn btn-outline btn-lg btn-start" id="again_btn" href="#">Again</a>
                            <!-- <a class="btn btn-outline btn-lg btn-start" href="#" style="visibility: hidden;">Blank</a> -->
                            <a class="btn btn-outline btn-lg btn-start" id="rank_btn" href="#">Rank</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" id="rule_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Rule</h4>
            </div>
            <div class="modal-body">
                blah blah~
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>