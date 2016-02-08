<?php
//ne raboti
$a= "<?php aaaaa ?> kkkkk <?php wwww ?> <?php ksjjjj <?php";

$b = preg_match_all('/(<\?php).*(\?>|$)/', $a);

var_dump($b);