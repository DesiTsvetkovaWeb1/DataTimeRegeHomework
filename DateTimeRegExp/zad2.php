<?php
function getValue($array, $key, $default=null){
	return isset ($array[$key])?$array[$key]:$default;
}

$arr['year'] = getValue($_GET, 'year');
$arr['month'] = getValue($_GET, 'month');
$arr['day'] = getValue($_GET, 'day');
$arr['hour'] = getValue($_GET, 'hour');
$arr['minute'] = getValue($_GET, 'minute');
$arr['second'] = getValue($_GET, 'second');
$addYear = getValue($_GET, 'year2');
$addMonth = getValue($_GET, 'month2');
$addDay = getValue($_GET, 'day2');
$addHour = getValue($_GET, 'hour2');
$addMin = getValue($_GET, 'minute2');
$addSec = getValue($_GET, 'second2');
$format = getValue($_GET, 'format');

$arr['year'] += $addYear;
$arr['month'] += $addMonth;
$arr['day'] += $addDay;
$arr['hour'] += $addHour;
$arr['minute'] += $addMin;
$arr['second'] += $addSec;

 $res1= mktime($arr['hour'],$arr['minute'],$arr['second'], $arr['month'], $arr['day'], $arr['year']);

$res = date($format, $res1);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<style>
		#container{
		width:700px;
		}
		label{
		display:inline-block;
		width:150px;
		padding:5px;
		margin:5px;
		text-align:right;
		font-style:italic;
		}
		input{
		border-radius:10px;
		border:1px solid black;
		text-align:center;
		}
		#submit{
		width:80px;
		height:30px;
		padding:3px;
		margin-top:50px;
		margin-right:150px;
		border:1px solid black;
		border-radius:5px;
		font-style:italic;
		float:right;
		}
		
		</style>
	</head>
	<body>
		<div id="container">
			<form method="GET">
				<div>
					<label for="year1">Years:</label>
					<input type="text" name="year" id="year1">
					<label for="year2">Years:</label>
					<input type="text" name="year2" id="year2">
				</div>
				<div>
					<label for="month1">Months:</label>
					<input type="text" name="month" id="month1">
					<label for="month2">Months:</label>
					<input type="text" name="month2" id="month2">
				</div>
				<div>
					<label for="day1">Days:</label>
					<input type="text" name="day" id="day1">
					<label for="day2">Days:</label>
					<input type="text" name="day2" id="day2">
				</div>
				<div>
					<label for="hour1">Hours:</label>
					<input type="text" name="hour" id="hour1">
					<label for="hour2">Hours:</label>
					<input type="text" name="hour2" id="hour2">
				</div>
				<div>
					<label for="minute1">Minutes:</label>
					<input type="text" name="minute" id="minute1">
					<label for="minute2">Minutes:</label>
					<input type="text" name="minute2" id="minute2">
				</div>
				<div>
					<label for="second1">Seconds:</label>
					<input type="text" name="second" id="second1">
					<label for="second2">Seconds:</label>
					<input type="text" name="second2" id="second2">
				</div>		
				<div>
					<label for="format">Choose format:</label>
					<input  type="text" name="format" id="format">
				</div>
				<div>
					<label for="result">Result:</label>
					<input  type="text" name="result" id="result" value="<?= $res; ?>">
				</div>
				<button type="submit" name="submit" id="submit"> Submit </button>
			</form>
		</div>
	</body>
</html>