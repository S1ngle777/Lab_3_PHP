<?php
$a = 0;
$b = 0;
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Промежуточные значения: a = " . $a . ", b = " . $b . "<br />";
}
echo "<br />Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
