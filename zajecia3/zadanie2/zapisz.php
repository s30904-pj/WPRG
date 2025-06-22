<?php
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$email = $_POST["email"];

// Tworzymy tekst do zapisania
$linia = $imie . " " . $nazwisko . " - " . $email . "\n";

// Dopisujemy do pliku
file_put_contents("dane.txt", $linia, FILE_APPEND);

echo "Dane zostały zapisane.";
?>
