<?php
$a="<input type = \"class= sfdsd\" class = \"s_num\" class =\"s_num\" />";

$b=preg_match_all('/(class\s?=\s?\")[a-z][a-zA-Z-_]*\"\s?/', $a);

var_dump($b);