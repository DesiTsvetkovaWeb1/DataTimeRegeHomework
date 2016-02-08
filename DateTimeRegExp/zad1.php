<?php

function getValue($array, $key, $default=null){
	return isset ($array[$key])?$array[$key]:$default;
}

$day= getValue($_GET, 'day');
$month= getValue($_GET, 'month');
$year= getValue($_GET, 'year');

$check=checkdate($day, $month, $year);
if(!$check){
	$error='Uncorect date';
}
else {
	$error="";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form</title>
		<style>
		#container{
		padding:25px;
		width:300px;
		height:200px;
		background-color:#ffffbb;
		border-radius:20px; 
		}
		label{
		display:inline-block;
		width:120px;
		}
		#submit{
		width:80px;
		height:25px;
		background-color: #E1E369;
		border:1px solid #E1E369;
		border-radius:10px;
		margin:50px;
		}
		div{
		margin-bottom:5px;
		}
		input{
		border-radius:5px;
		border:1px solid #E1E369;
		}
		p{
		color:red;
		font-size:18px;
		text-align:center;
		}
		
		</style>
	</head>
	<body>
		<div id="container">
		<p>	<?= $error ?></p>
			<form method = "GET">
			<div>
				<label for="day">Enter day: </label>
				<input type="text" name="day" id="day">
			</div>
			<div>
				<label for="month">Enter month: </label>
				<input type="text" name="month" id="month">
			</div>
			<div>			
				<label for="year">Enter day: </label>
				<input type="text" name="year" id="year">
			</div>
			<button type="submit" name="submit" id ="submit">Submit</button>
			</form>
		</div>
		
	</body>
</html>