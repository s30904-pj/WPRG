<?php
$linia = $_POST["imie"] . " " . $_POST["nazwisko"] . " - " . $_POST["email"] . "\n";
file_put_contents("rezerwacje.txt", $linia, FILE_APPEND);
echo "Rezerwacja została zapisana.<br><a href='rezerwacja.php'>Wróć</a>";
?>
