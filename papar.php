<?php
if (isset($_POST['submit'])) {
    $input_next = $_POST["input_next"];

    $bil_perkataan = str_word_count($input_next);
    $bil_huruf = strlen(str_replace('', '', $input_next));
    $perkataan_terbalik = strrev($input_next);

    echo "<p>Ayat ini mengandungi  $bil_perkataan perkataan</p>";
    echo "<p>Ayat ini mengandungi $bil_huruf huruf</p>";

    $perkataan_terbalik = strrev($input_next);
    echo "<p>Ayat terbalik: $perkataan_terbalik</p>";
}
?>