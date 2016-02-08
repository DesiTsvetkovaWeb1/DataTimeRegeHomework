<?php
$a = "fkds khjdhfj ddsf dfdfd h hbbb  kjhjh";

$b=preg_match_all('/[^|\s][a-zA-Z](\s|$)/', $a);
var_dump($b);