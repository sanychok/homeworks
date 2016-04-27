<?php  
function FunctionName($symbol = '*', $lenhth=10)
{
 for ($i = 1; $i < $lenhth; $i++) {
  for ($j = 1; $j <= $i; $j++) {
   echo $symbol;
  }echo '<br/>';
 }
}
 
 