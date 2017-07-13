<?php 



$html = '<form action="index.php" method="post">
    <div>
        <label for="value_n">Длина слова:</label>
        <input type="text" name="name" id="value_n" placeholder="Значение N">
    </div>
    <input type="submit" name="submit"></button>
</form>';

echo $html;

$lengh=$_POST['name'];

$file=file_get_contents('3.2.txt');
$arr=(explode(' ',$file));

for ($i = 0; $i < count($arr); $i++) {

    if (mb_strlen($arr[$i]) > $lengh){
        unset($arr[$i]);
    }
}
file_put_contents('3.3.txt',implode(" ", $arr));




?>