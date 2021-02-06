<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);

header("Location: index.php?logout=true");

?>