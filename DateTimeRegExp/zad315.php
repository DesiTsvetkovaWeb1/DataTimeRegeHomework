
<?php
$a="SELECT * FROM Data
		SELSECT * Data
		SELECT Data FROM Table";

$b=preg_match_all('/(SELECT)(\s(.+)\s|\s\*\s)(FROM)(.+)/', $a);

var_dump($b);