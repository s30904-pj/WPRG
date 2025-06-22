<?php
$liczba = $_POST["liczba_osob"];

echo "<h2>Podsumowanie rezerwacji</h2>";

for ($i = 1; $i <= $liczba; $i++) {
    $imie = $_POST["imie$i"];
    $nazwisko = $_POST["nazwisko$i"];
    echo "Osoba $i: $imie $nazwisko<br>";
}
?>
