<?php
$liczba = $_POST["liczba"];

if ($liczba < 2) {
    echo "Liczba nie jest pierwsza.<br>";
    exit;
}

$czy_pierwsza = true;

echo "Sprawdzam podzielność liczby $liczba:<br>";

for ($i = 2; $i < $liczba; $i++) {
    echo "Czy $liczba % $i == 0? ";

    if ($liczba % $i == 0) {
        echo "TAK → nie jest pierwsza<br>";
        $czy_pierwsza = false;
        break;
    } else {
        echo "NIE<br>";
    }
}

if ($czy_pierwsza) {
    echo "<br>✔ Liczba $liczba jest pierwsza.";
} else {
    echo "<br>✘ Liczba $liczba nie jest pierwsza.";
}
?>
