<?php
$start = 2;
$end = 30;

for ($i = $start; $i <= $end; $i++) {
    $czy_pierwsza = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $czy_pierwsza = false;
            break;
        }
    }

    if ($czy_pierwsza) {
        echo $i . "<br>";
    }
}
?>