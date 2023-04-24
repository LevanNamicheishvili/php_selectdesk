<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Game Form</title>
	<link rel="stylesheet" href="./index.css">
	<script src="jquery-3.6.4.js"></script>
	<script>
		$(document).ready(function() {
	
    $('#Submit1').click(function() 	{
	//	alert();
	var qula =	$( "#point option:selected" ).text();
	var pc = 1;
	if( $('#pcno').is(':checked') ) { 	pc = 0;	}
	var davi = 0;
	if( $('#daviyes').is(':checked') ) { 	davi = 1;	}
	//alert("qula = "+qula+ " pc = "+pc+" davi= "+davi);

		$("#actionDiv").load("oper.php", {"moqmedeba": "magidisSheqmna",  "qula": qula, "pc": pc, "davi": davi}, function() {
			

			});

	
   });
});
	</script>
</head>
<body>
	<?php
//bazidan tsamogheba
	?>
	<div id=actionDiv>1</div>
	<div class="container">
	<form>
		<label for="point">Select game point:</label>
		<select id="point" name="point">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
		</select>
		<label for="with-computer">Do you want to play with computer?</label>
		<div>
			<label>
				<input type="radio"  name="with-computer" id="pcyes" checked>
				Yes
			</label>
			<label>
				<input type="radio" name="with-computer" id="pcno">
				No
			</label>
		</div>
		<label for="on-davi">Do you want to play on Davi?</label>
		<div>
			<label>
				<input type="radio" name="on-davi" value="yes" id=daviyes > 
				Yes
			</label>
			<label>
				<input type="radio" name="on-davi" value="no" id=davino  checked>
				No
			</label>
		</div>
		<input type="button" id="Submit1" value='add'>
		<br />
		<input type="button" id="Submit1" value='delete all'>
		<br />
		<!-- ქულა<input type=text ><input type=button value=delete> -->
		<br />
	</form>
	</div>
</body>
</html>

<!-- delete
where
select 


//yvela chanaweris wamogheba -->

