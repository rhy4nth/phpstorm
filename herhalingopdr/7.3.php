<?php

session_start();

if (isset($_POST['taal'])) {
    $_SESSION['taal'] = $_POST['taal'];
    header("Location: taaltonen.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Taal Instellen</title>
</head>
<body>
<h1>Kies je voorkeurstaal</h1>
<form method="post" action="">
    <label for="taal">Selecteer taal:</label>
    <select name="taal" id="taal">
        <option value="Nederlands">Nederlands</option>
        <option value="Engels">Engels</option>
    </select>
    <br><br>
    <input type="submit" value="Taal instellen">
</form>
</body>
</html>
