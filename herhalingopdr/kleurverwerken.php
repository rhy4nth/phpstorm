<?php

session_start();

$kleur = isset($_GET['kleur']) ? $_GET['kleur'] : 'onbekend';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Kleur Verwerken</title>
</head>
<body>
    <h1>Kleur Verwerken</h1>

    <p>Je hebt gekozen voor de kleur: <strong><?php echo htmlspecialchars($kleur); ?></strong></p>

    <p><a href="7.5.php">Kies een andere kleur</a></p>
</body>
</html>
