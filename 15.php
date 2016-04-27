<?php
$a = 44;
$b = 25;
$operator = '*';
if ($operator == '*') {
 echo $a*$b;
}
elseif ($operator == '-') {
 echo $a-$b;
}
elseif ($operator == '/' && $b == '0') {
 echo "На ноль делить недьзя";
}
elseif ($operator == '/' && $b!=0) {
 echo $a/$b;
}
elseif ($operator == '+') {
 echo $a+$b;
}
elseif ($operator == '%') {
 echo $a%$b;
}
?>