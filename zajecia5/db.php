<?php
$host = "localhost";
$user = "root";
$pass = "";    
$db = "mojaBaza";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Błąd połączenia z bazą danych.");
}
?>
