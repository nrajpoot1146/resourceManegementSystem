<?php
//logout file
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['id']);
header("location: http://localhost/ht");
?>
