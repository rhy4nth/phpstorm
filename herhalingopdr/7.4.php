<?php
$ip_adres = $_SERVER['REMOTE_ADDR'];
$serverpoort = $_SERVER['SERVER_PORT'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Informatie over de gebruiker</title>
</head>
<body>
    <h1>Gebruikersinformatie</h1>

    <p><strong>IP-adres van de gebruiker:</strong> <?php echo $ip_adres; ?></p>
    <p><strong>Serverpoort:</strong> <?php echo $serverpoort; ?></p>
    <p><strong>Browser en besturingssysteem (User Agent):</strong> <?php echo $user_agent; ?></p>
</body>
</html>
