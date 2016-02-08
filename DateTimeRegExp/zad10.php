<?php

$a="desi@gmail.com 
		abv@gmail.com";
$b=preg_match_all('/([a-zA-Z0-9\._-])+(@gmail\.com)/', $a);

var_dump($b);