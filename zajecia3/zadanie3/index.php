<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Wczytaj i pokaż dane
    $plik = "dane.csv";

    if (!file_exists($plik)) {
        echo "Brak danych.";
        exit;
    }

    $linie = file($plik);

    echo "<h3>Lista rezerwacji:</h3>";
    echo "<table border='1'>";

    foreach ($linie as $wiersz) {
        $dane = explode(";", trim($wiersz));
        echo "<tr>";
        foreach ($dane as $pole) {
            echo "<td>$pole</td>";
        }
        echo "</tr>";
    }
    echo "</table><br><a href='index.php'>Wróć</a>";
    exit;
}
?>

<h2>Formularz rezerwacji</h2>
<form method="POST" action="rezerwacja.php">
    <label>Imię:</label>
    <input type="text" name="imie"><br>

    <label>Nazwisko:</label>
    <input type="text" name="nazwisko"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>Data pobytu:</label>
    <input type="date" name="data"><br><br>

    <input type="submit" value="Zapisz rezerwację">
</form>

<br><br>

<form method="POST" action="index.php">
    <input type="submit" value="Wczytaj rezerwacje">
</form>
