<?php 
 function recursion ($array,$keys = false)
 {
 if ($keys == false) { foreach ($array as $key => $value) {
   if (is_array($value)) {
    recursion($value);
   } else {
    return $value;}
   }
  }else{
  foreach ($array as $key => $value) {
   if (is_array($key)) {
    recursion($key);
   } else {
    return $key;}
  }
 }
 };
$arr =array(1=>[1,2,3],2=>[4,5,6],3=>10);
 $c[] = recursion ($arr, true);
 print_r($c);