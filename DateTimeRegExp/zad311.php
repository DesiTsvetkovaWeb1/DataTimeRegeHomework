<?php


$a="desi@gmail.com 
		abv@gmail.com
		dff#@abv.bg
		er45@mail.bg
		rty@yahoo.com";
$b=preg_match_all('/([a-zA-Z0-9\._-])+@(gmail\.com|yahoo\.com|abv\.bg)/', $a);

var_dump($b);