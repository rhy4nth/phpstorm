<?php
session_start();

$kleur = isset($_SESSION['kleur']) ? $_SESSION['kleur'] : (isset($_GET['kleur']) ? $_GET['kleur'] : 'onbekend');
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Welkom Pagina</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($kleur); ?>;">
    <h1>Welkom!</h1>
    <p>Je favoriete kleur is: <strong><?php echo htmlspecialchars($kleur); ?></strong></p>

    <p><a href="kleurverwerken.php?kleur=<?php echo urlencode($kleur); ?>">Pas het kleurthema aan</a></p>
</body>
</html>
