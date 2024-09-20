<?php

session_start();

unset($_SESSION['taal']);

header("Location: taaltonen.php");
exit();
