<?php
if (!isset($_POST["liczba_osob"])) {
    echo "Nie wybrano liczby osób.";
    exit;
}

$liczba = $_POST["liczba_osob"];
?>

<form method="POST" action="podsumowanie_osob.php">
    <input type="hidden" name="liczba_osob" value="<?php echo $liczba; ?>">

    <?php
    for ($i = 1; $i <= $liczba; $i++) {
        echo "<h3>Osoba $i</h3>";
        echo "Imię: <input type='text' name='imie$i'><br>";
        echo "Nazwisko: <input type='text' name='nazwisko$i'><br><br>";
    }
    ?>
    <input type="submit" value="Zatwierdź rezerwację">
</form>
