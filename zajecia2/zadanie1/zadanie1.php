<?php
$a = $_POST["a"];
$b = $_POST["b"];
$dzialanie = $_POST["dzialanie"];

if ($dzialanie == "dodaj") {
    $wynik = $a + $b;
} elseif ($dzialanie == "odejmij") {
    $wynik = $a - $b;
} elseif ($dzialanie == "pomnoz") {
    $wynik = $a * $b;
} elseif ($dzialanie == "podziel") {
    if ($b != 0) {
        $wynik = $a / $b;
    } else {
        $wynik = "Nie dziel przez zero";
    }
} else {
    $wynik = "Błąd";
}

echo "Wynik: " . $wynik;
?>
