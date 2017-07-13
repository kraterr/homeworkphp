<?php

include '10.html';

function unique($arg){
    $arr = explode(' ', $arg);
    echo 'Всего слов - '.count($arr);
    $new_arr = [];
    foreach ($arr as $key => $value) {

    	$new_arr[$value] = 'hello';
    }
    return count($new_arr);
}



unique($_POST['text']);