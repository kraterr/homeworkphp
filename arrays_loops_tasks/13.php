<?php 

#№13

$i = 1;

echo "<table border = '1' cellpadding='20'><tr>";

 while( $i <= 10 ) { 
    $j = 1;      
    while( $j <= 10 ) { 
        echo "<td>".($i*$j)."</td>";

    
        $j++;  
    }       
    if ($i != 10) echo "</tr><tr>";     
    $i++;    
}  

echo "</tr></table>";


?>