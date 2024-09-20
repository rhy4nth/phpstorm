<?php
if (isset($_GET['voornaam']) && isset($_GET['achternaam'])) {
    echo  $_GET['voornaam'] . "<br>";
    echo $_GET['achternaam'];
} else {
    echo "Vul je voornaam en achternaam in.";
}
?>
