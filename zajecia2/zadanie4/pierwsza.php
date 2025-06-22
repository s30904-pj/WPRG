<?php
$liczba = $_POST["liczba"];

if ($liczba < 2) {
    echo "Liczba nie jest pierwsza.";
    exit;
}

$czy_pierwsza = true;

for ($i = 2; $i < $liczba; $i++) {
    if ($liczba % $i == 0) {
        $czy_pierwsza = false;
        break;
    }
}

if ($czy_pierwsza) {
    echo "Liczba $liczba jest pierwsza.";
} else {
    echo "Liczba $liczba nie jest pierwsza.";
}
?>
