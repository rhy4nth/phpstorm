<?php

session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Taal Tonen</title>
</head>
<body>
    <h1>Je taalvoorkeur</h1>

    <?php
    if (isset($_SESSION['taal'])) {
        echo "Je huidige taalvoorkeur is: " . $_SESSION['taal'];
    } else {
        echo "Er is geen taalvoorkeur ingesteld.";
    }
    ?>

    <br><br>

    <?php if (isset($_SESSION['taal'])): ?>
    <form method="post" action="taalverwijderen.php">
        <input type="submit" value="Verwijder taalvoorkeur">
    </form>
    <?php endif; ?>

    <p><a href="7.3">Ga terug om je taal aan te passen</a></p>
</body>
</html>
