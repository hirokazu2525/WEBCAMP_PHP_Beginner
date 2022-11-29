<?php

$a=1;
$b=0;
$s=0;

$s=$a+$b;
 
while(($s=$a+$b)<10000){
 echo $s=$a+$b;
  $a=$b; 
  $b=$s;
echo "\n";
}
echo $s=$a+$b;