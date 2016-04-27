<?php
$text = "45frsdfaf56";
function Func($text )
{
    for ($i = 0; $i < iconv_strlen($text); $i++) {
        echo ord($text{$i});
    }
}
  