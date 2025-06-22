<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM samochody ORDER BY rok DESC");
?>

<h2>Wszystkie samochody (posortowane po roczniku)</h2>

<table border="1">
    <tr><th>ID</th><th>Marka</th><th>Model</th><th>Cena</th><th>Akcja</th></tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["marka"]; ?></td>
            <td><?php echo $row["model"]; ?></td>
            <td><?php echo $row["cena"]; ?> zł</td>
            <td><a href="szczegoly.php?id=<?php echo $row["id"]; ?>">Szczegóły</a></td>
        </tr>
    <?php } ?>
</table>

<br>
<a href="index.php">Strona główna</a> | 
<a href="dodaj.php">Dodaj samochód</a>
