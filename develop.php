<!-- use matrix.css for temp -->
	<link href="css/block.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/develop.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/develop.js"></script>

	<header>
		<div class="container game-container">
			<div class="row">
        	<form class="edittable" action="#" id="develop_form">
        	<div class="game-title">
                <h1>New map</h1>
                <hr class="star-light">
            </div>


            <div class="game-table" id="develop_table">
				<div class="block1 block" id="s00">
					<input name="a00" type="text" id="a00" class="form-control matrix_element" maxlength="1" required>
				</div>	
				
				<div class="block1 block" id="s01">
					<input name="a01" type="text" id="a01" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block1 block" id="s02">
					<input name="a02" type="text" id="a02" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block1 block" id="s03">
					<input name="a03" type="text" id="a03" class="form-control matrix_element" maxlength="1" required>
				</div><br>
				
				<div class="block2 block" id="s10">
					<input name="a10" type="text" id="a10" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block2 block" id="s11">
					<input name="a11" type="text" id="a11" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block2 block" id="s12">
					<input name="a12" type="text" id="a12" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block2 block" id="s13">
					<input name="a13" type="text" id="a13" class="form-control matrix_element" maxlength="1" required>
				</div><br>
				
				<div class="block3 block" id="s20">
					<input name="a20" type="text" id="a20" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block3 block" id="s21">
					<input name="a21" type="text" id="a21" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block3 block" id="s22">
					<input name="a22" type="text" id="a22" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block3 block" id="s23">
					<input name="a23" type="text" id="a23" class="form-control matrix_element" maxlength="1" required>
				</div><br>
				
				<div class="block4 block" id="s30">
					<input name="a30" type="text" id="a30" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block4 block" id="s31">
					<input name="a31" type="text" id="a31" class="form-control matrix_element" maxlength="1" required>	
				</div>
				
				<div class="block4 block" id="s32">
				  	<input name="a32" type="text" id="a32" class="form-control matrix_element" maxlength="1" required>
				</div>
				
				<div class="block4 block" id="s33">
					<input name="a33" type="text" id="a33" class="form-control matrix_element" maxlength="1" required>
				</div><br><br>
			</div>

			<button name="update" class="btn-outline btn-lg" id="submit" type="submit">Send</button>
			</form>
			</div>
			<div class="alert alert-success" role="alert" id="develop_success_alert">
				<strong>Well done!</strong> Thanks for your new map <3
			</div>
		</div>
    </header>