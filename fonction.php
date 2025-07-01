<?php
function Echanger(int &$a, int &$b) : void {
  $temp = $a;
   $a = $b;
   $b = $temp;
}

$c = 1;
$d = 2;

Echanger($c, $d);
echo "C = {$c} and D = {$d}";


