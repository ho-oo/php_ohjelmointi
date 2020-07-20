<?php
$merkkijono = "esimerkki";
for ($i = 0; $i < strlen($merkkijono); $i++) {
    $merkki = $merkkijono[$i];
    $koodi = ord($merkki);
    echo "{$merkki} = {$koodi} <br>";
}
?>