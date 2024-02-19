<?php
$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(1, 100);
}
echo "Массив: <br />";
foreach ($arr as $value) {
    echo $value . "<br />";
}