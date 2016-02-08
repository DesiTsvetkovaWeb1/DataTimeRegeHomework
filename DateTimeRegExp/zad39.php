<?php
$a = "бв 8669 Ф";

$b=preg_match_all('/(бв)\s?[0-9]{4}\s?[Р-п]{1}/', $a);

var_dump($b);