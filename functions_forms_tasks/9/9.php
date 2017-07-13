<?php
include '9.html';

function reverse($arg)
{
    $b='';
    for ($i = strlen($arg) - 1; $i >= 0; $i--) {
        //   echo $a[$i] ;
        $b .= $arg[$i];
    }
    return $b;
}

$text = $_POST['text1'];

echo reverse($text);