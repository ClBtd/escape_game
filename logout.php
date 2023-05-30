<?php
session_start();
unset($_SESSION['connecte']);
unset($_SESSION['team_name']);
header('Location: index.php');
?>