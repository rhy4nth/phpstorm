<?php

session_start();

if (isset($_POST['kleur'])) {
    $_SESSION['kleur'] = $_POST['kleur'];

    header("Location: welkom.php?kleur=" . urlencode($_SESSION['kleur']));
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Kleur Instellen</title>
</head>
<body>
<h1>Voer je favoriete kleur in</h1>
<form method="post" action="">
    <label for="kleur">Favoriete kleur:</label>
    <input type="text" id="kleur" name="kleur" placeholder="Bijv. blauw, rood, etc.">
    <br><br>
    <input type="submit" value="Verzenden">
</form>
</body>
</html>
