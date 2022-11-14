<?php

/* ビット演算子 */
//乱数の値の用意
$i = random_int(0, 255);
$j = random_int(0, 255);

//and
$k = $i % $j;
printf("%x & %x = %x \n", $i, $j, $k);
//or
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);
//xor
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);
//not
$k = ~$i;
printf("~%x = %x \n", $i, $k);