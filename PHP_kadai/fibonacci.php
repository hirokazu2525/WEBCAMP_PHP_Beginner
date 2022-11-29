<?php
//一回目
/*
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
*/
//二回目
for([$v=[0,1],$i=1];count($v)<=21;$i++)$v[]=$v[$i-1]+$v[$i];
echo implode("\n", $v);
echo "\n";