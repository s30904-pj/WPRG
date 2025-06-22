<?php
echo "<h2>Podsumowanie rezerwacji</h2>";

echo "Liczba osób: " . $_POST["osoby"] . "<br>";
echo "Imię: " . $_POST["imie"] . "<br>";
echo "Nazwisko: " . $_POST["nazwisko"] . "<br>";
echo "Adres: " . $_POST["adres"] . "<br>";
echo "Data pobytu: " . $_POST["data"] . "<br>";
echo "Godzina przyjazdu: " . $_POST["godzina"] . "<br>";
echo "E-mail: " . $_POST["email"] . "<br>";
echo "Karta kredytowa: " . $_POST["karta"] . "<br>";

if (isset($_POST["lozko"])) {
    echo "Dodatkowe łóżko: Tak<br>";
}

if (isset($_POST["klima"])) {
    echo "Klimatyzacja: Tak<br>";
}

if (isset($_POST["palacz"])) {
    echo "Dla palacza: Tak<br>";
}
?>