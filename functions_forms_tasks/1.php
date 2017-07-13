<?php 

$html = '<form action="index.php" method="post">
	<textarea name="text1" id="" cols="30" rows="10">
	</textarea> <br>
	<textarea name="text2" id="" cols="30" rows="10"></textarea>
	<input type="submit" value="submit"> <br>
</form>';

echo $html;

$str1 = $_POST['text1'];

$str2 = $_POST['text2'];

if(empty($str1) || empty($str2)){
	echo "Error";
}else{
	$str = getCommonWords($str1, $str2);
	echo $str;
}






function getCommonWords($str1, $str2){

	$arr1 = explode(" ", $str1);

	$arr2 = explode(" ", $str2);

	$arr3 = [];

	$len1 = count($arr1);

	$len2 = count($arr2);


	for ($i=0; $i < $len1; $i++) { 
		for ($j=0; $j < $len2; $j++) { 
			if($arr1[$i] == $arr2[$j]){
				$arr3[] = $arr1[$i];
			}
		}
	}
	$str = implode(" ", $arr3);

	return $str;
}


?>