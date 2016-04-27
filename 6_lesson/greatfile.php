<?php
function GreatFile($great='default25.txt', $text='Hello mister Bin' )
{
    $f= fopen($great, 'w+');
fwrite($f, (string)$text );
fclose($f);
}

