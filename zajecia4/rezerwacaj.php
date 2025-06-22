<?php
session_start();
if (!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] !== true) {
    echo "Nie masz dostępu do tej strony. Zaloguj się najpierw.";
    exit;
}


if (isset($_POST["imie"])) {
    setcookie("imie", $_POST["imie"], time() + 3600);
    setcookie("nazwisko", $_POST["nazwisko"], time() + 3600);
    setcookie("email", $_POST["email"], time() + 3600);
}

if (isset($_POST["wyczysc"])) {
    setcookie("imie", "", time() - 3600);
    setcookie("nazwisko", "", time() - 3600);
    setcookie("email", "", time() - 3600);
    header("Location: rezerwacja.php");
    exit;
}
?>

<h2>Formularz rezerwacji</h2>
<p>Witaj, <?php echo isset($_COOKIE["login"]) ? $_COOKIE["login"] : "gościu"; ?>!</p>

<form method="POST" action="rezerwacja.php">
    <label>Imię:</label>
    <input type="text" name="imie" value="<?php echo $_COOKIE["imie"] ?? ""; ?>"><br>

    <label>Nazwisko:</label>
    <input type="text" name="nazwisko" value="<?php echo $_COOKIE["nazwisko"] ?? ""; ?>"><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $_COOKIE["email"] ?? ""; ?>"><br><br>

    <input type="submit" value="Zapisz dane w ciasteczkach">
</form>

<form method="POST" action="rezerwacja.php">
    <input type="hidden" name="wyczysc" value="1">
    <input type="submit" value="Wyczyść dane (ciasteczka)">
</form>

<br><br>

<form method="POST" action="zapisz.php">
    <input type="hidden" name="imie" value="<?php echo $_COOKIE["imie"] ?? ""; ?>">
    <input type="hidden" name="nazwisko" value="<?php echo $_COOKIE["nazwisko"] ?? ""; ?>">
    <input type="hidden" name="email" value="<?php echo $_COOKIE["email"] ?? ""; ?>">
    <input type="submit" value="Zarezerwuj i zapisz do pliku">
</form>

<br>
<a href="wyloguj.php">Wyloguj</a>
