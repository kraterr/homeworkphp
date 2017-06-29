<?php 

#№28

$str = "<table border='1' cellpadding='10'>";


for ($i = 1; $i < 11; $i++) { 

	$str .= "<tr>";

	for ($j = 1; $j < 11; $j++) { 
		
		$str .= "<td>".$i * $j."</td>";
	}

	$str .= "</tr>";
}


$str .= "</table>";

echo $str;


?>