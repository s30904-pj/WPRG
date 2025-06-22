<?php
session_start();
if (isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] === true) {
    header("Location: rezerwacja.php");
    exit;
}
?>

<h2>Logowanie</h2>
<form method="POST" action="walidacja.php">
    <label>Login:</label>
    <input type="text" name="login"><br><br>

    <label>Hasło:</label>
    <input type="password" name="haslo"><br><br>

    <input type="submit" value="Zaloguj">
</form>
