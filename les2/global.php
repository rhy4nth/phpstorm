
<form action="global.php" method="POST">
    <input name="student">
</form>

<a href="global.php?id=5"><input></a>
<?php

//komt vanuit een formulier: input met een name field
$_POST['student'];
//url global.php?student=Jan
$_GET['student'];

$_SESSION['student'];
$_SESSION['teacher'];

unset($_SESSION['student']);

$_SESSION=[];
session_destroy();

$_SERVER['PHP_SELF'];
$_SERVER['HTTP_REFERER'];
$_SERVER['SERVER_NAME'];


