<?php
session_start();

// Clear the specific session variable
unset($_SESSION["sidx"]);

// Alternatively, if you just want to reset it to an empty value:
// $_SESSION["sidx"] = "";

// Redirect to index.php
header('Location: index.php');
exit;
?>
