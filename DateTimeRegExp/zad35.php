<?php
$a = "In 1863 there were 56 known elements with a new element 0899654120 being discovered at a rate of approximately 088888 one per year. Other scientists had 
		previously identified periodicity of elements. John Newlands described 0788999111 a Law of Octaves, noting their periodicity according to relative 
		atomic weight in 1864, publishing 0888999888 it in 1865.";
$b= preg_match_all('/(08)[7-9][0-9]{7}/', $a);

var_dump($b); 