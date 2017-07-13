<?php 



print_r(search_dir(__DIR__,'mag'));


function search_dir($dir,$word){
    $arr=(scandir($dir));
    for ($i = 0; $i < count($arr); $i++) {
        $pos=strpos($arr[$i],$word);
        if($pos!==false){
            $result[]=$arr[$i];
        }
    }return $result;
}


?>