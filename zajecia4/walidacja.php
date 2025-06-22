<?php
session_start();

$poprawny_login = "admin";
$poprawne_haslo = "haslo123";

$login = $_POST["login"];
$haslo = $_POST["haslo"];

if ($login == $poprawny_login && $haslo == $poprawne_haslo) {
    $_SESSION["zalogowany"] = true;
    
    setcookie("login", $login, time() + (7 * 24 * 60 * 60));

    header("Location: rezerwacja.php");
} else {
    echo "Niepoprawne dane logowania<br><a href='login.php'>Spróbuj ponownie</a>";
}
?>
