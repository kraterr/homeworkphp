<?php 

$html = '<form action="index.php" method="post">
	<textarea name="text" id="" cols="30" rows="10">
	</textarea> <br>
	<input type="submit" value="submit"> <br>
</form>';

echo $html;

$str = $_POST['text'];

if(empty($str)){
	echo "Error";
}else{
	
$str = myFunc($str);

echo $str;

}


// $col - количество топ длинных слов

function myFunc($str, $col = 3){

	$arr = explode(" ", $str);

	$strtop = []; // массив топ 3 длинных строк


	$max = " "; // максимальный элемент

	for ($i=0; $i < $col; $i++) { 

		foreach ($arr as $key => &$value) {
			$count = strlen($value); 
			if($count > strlen($max)){
				$max = $value;
				$kol = $key; // запоминаем элемент который максимальный на текущей итерации
			}
		}

		$strtop[] = $max;
		$max = " "; // обнуляем максимальный элемент
		unset($arr[$kol]); // удаляем максимальный элемент из массива
	}


	$str = implode(" ", $strtop);
	return $str;
}

?>