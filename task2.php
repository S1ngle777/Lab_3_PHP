<?php
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Промежуточные значения: a = " . $a . ", b = " . $b . "<br />";
    $i++;
}
echo "<br />Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
