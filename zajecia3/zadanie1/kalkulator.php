<?php
include("funkcje.php");

$a = $_POST["a"];
$b = $_POST["b"];
$dzialanie = $_POST["dzialanie"];

switch ($dzialanie) {
    case "dodaj":
        $wynik = dodaj($a, $b);
        break;
    case "odejmij":
        $wynik = odejmij($a, $b);
        break;
    case "pomnoz":
        $wynik = pomnoz($a, $b);
        break;
    case "podziel":
        $wynik = podziel($a, $b);
        break;
    default:
        $wynik = "Nieznane działanie";
}

echo "Wynik: " . $wynik;
?>
