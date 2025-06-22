<?php
$n = 10;
$fib = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

$nr = 1;
foreach ($fib as $index => $liczba) {
    if ($index % 2 != 0) {
        echo $nr . ". " . $liczba . "<br>";
        $nr++;
    }
}
?>