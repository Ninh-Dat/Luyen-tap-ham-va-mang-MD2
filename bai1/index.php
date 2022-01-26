<?php
 function createArr($number)
 {
     $arr = [];
     for ($i = 0; $i < $number; $i++) {
         $arr[] = rand(1, 100);
     }
    return $arr;
 }
 echo "<pre>";
 print_r(createArr(10));