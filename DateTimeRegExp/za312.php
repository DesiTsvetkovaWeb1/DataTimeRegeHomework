<?php
$a="10008 ";

$b=preg_match_all('/[1-9]{1}[0-9]{3}\D|(19000)\D|(1){1}[0-8]{1}[0-9]{3}\D/', $a);

var_dump($b);