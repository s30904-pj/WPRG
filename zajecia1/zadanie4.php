<?php
$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been..."; 
$tablica = explode(" ", $tekst);

$czyszczenie = [];
$ile = count($tablica);

for ($i = 0; $i < $ile; $i++) {
    $słowo = $tablica[$i];

    if ($słowo == "." || $słowo == "," || $słowo == "..." || $słowo == "!" || $słowo == "?") {
        if (isset($tablica[$i + 1])) {
            $czyszczenie[] = $tablica[$i + 1];
        }
        $i++;
    } else {
        $czyszczenie[] = $słowo;
    }
}
$asoc = [];

for ($i = 1; $i < count($czyszczenie); $i += 2) {
    $klucz = $czyszczenie[$i];
    $wartosc = isset($czyszczenie[$i + 1]) ? $czyszczenie[$i + 1] : "";
    $asoc[$klucz] = $wartosc;
}

foreach ($asoc as $k => $v) {
    echo $k . " => " . $v . "<br>";
}
?>