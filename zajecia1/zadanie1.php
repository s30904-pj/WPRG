<?php
$owoce = ["jabłko", "banan", "pomarańcza"];

foreach ($owoce as $owoc) {
    $dl = 0;
    while (isset($owoc[$dl])) {
        $dl++;
    }

    $odwrocony = "";
    for ($i = $dl - 1; $i >= 0; $i--) {
        $odwrocony .= $owoc[$i];
    }

    echo $odwrocony;

    if ($owoc[0] == "p") {
        echo " - zaczyna się na 'p'";
    }

    echo "<br>";
}
?>