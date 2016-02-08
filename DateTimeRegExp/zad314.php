<?php
$a="while(\$a= 7){dsfds};
		while(\$b=\"dsf\"){fjfjfj}
while(){}";

$b=preg_match_all('/while\(.+\)\{.+\}/', $a);

var_dump($b);