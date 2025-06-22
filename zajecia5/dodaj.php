<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $cena = $_POST["cena"];
    $rok = $_POST["rok"];
    $opis = $_POST["opis"];

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis)
            VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";

    mysqli_query($conn, $sql);
    echo "Dodano samochód!<br><a href='index.php'>Wróć na stronę główną</a>";
    exit;
}
?>

<h2>Dodaj samochód</h2>
<form method="POST" action="">
    Marka: <input type="text" name="marka"><br>
    Model: <input type="text" name="model"><br>
    Cena: <input type="number" name="cena" step="0.01"><br>
    Rok: <input type="number" name="rok"><br>
    Opis: <textarea name="opis"></textarea><br>
    <input type="submit" value="Dodaj">
</form>

<br>
<a href="index.php">Strona główna</a> | 
<a href="wszystkie.php">Wszystkie samochody</a>
