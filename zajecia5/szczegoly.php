<?php
include("db.php");

if (!isset($_GET["id"])) {
    echo "Brak ID samochodu!";
    exit;
}

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM samochody WHERE id = $id");

if (mysqli_num_rows($result) == 0) {
    echo "Nie znaleziono samochodu.";
    exit;
}

$row = mysqli_fetch_assoc($result);
?>

<h2>Szczegóły samochodu</h2>
<p><strong>Marka:</strong> <?php echo $row["marka"]; ?></p>
<p><strong>Model:</strong> <?php echo $row["model"]; ?></p>
<p><strong>Cena:</strong> <?php echo $row["cena"]; ?> zł</p>
<p><strong>Rok:</strong> <?php echo $row["rok"]; ?></p>
<p><strong>Opis:</strong> <?php echo $row["opis"]; ?></p>

<br>
<a href="wszystkie.php">← Powrót do listy samochodów</a>
