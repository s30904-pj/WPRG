<?php
$plik = "dane.csv";
$nowy = !file_exists($plik); // czy plik nie istnieje

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$email = $_POST["email"];
$data = $_POST["data"];

// Dodaj nagłówki, jeśli to pierwszy wpis
if ($nowy) {
    $naglowki = "Imię;Nazwisko;Email;Data\n";
    file_put_contents($plik, $naglowki);
}

// Zapisz dane
$linia = "$imie;$nazwisko;$email;$data\n";
file_put_contents($plik, $linia, FILE_APPEND);

echo "Rezerwacja została zapisana.<br><a href='index.php'>Wróć</a>";
?>
