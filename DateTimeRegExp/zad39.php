<?php
$a = "�� 8669 �";

$b=preg_match_all('/(��)\s?[0-9]{4}\s?[�-�]{1}/', $a);

var_dump($b);