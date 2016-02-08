<?php
$a="sdfting sdfsdf ting fgdfg kfhjkfgting tingfgfdg";

$b=preg_match_all('/(ting)(\s|$)/', $a);

var_dump($b);