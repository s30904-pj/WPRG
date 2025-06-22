<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5");
?>

<h2>Strona główna – Najtańsze samochody</h2>

<table border="1">
    <tr><th>Marka</th><th>Model</th><th>Cena</th></tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["marka"]; ?></td>
            <td><?php echo $row["model"]; ?></td>
            <td><?php echo $row["cena"]; ?> zł</td>
        </tr>
    <?php } ?>
</table>

<br>
<a href="wszystkie.php">Wszystkie samochody</a> | 
<a href="dodaj.php">Dodaj samochód</a>
