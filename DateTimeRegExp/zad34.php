<?php
$a = "In 1863 there were 56 known elements with. a new element being discovered at a rate of approximately one per year. Other scientists had
		previously identified periodicity of elements.John Newlands described a Law of Octaves, noting their? periodicity according to relative atomic
		weight in 1864, publishing. it in 1865.";

$b = preg_match_all('/[a-z](\.|\!|\?)/', $a);

var_dump($b);