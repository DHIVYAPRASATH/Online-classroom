<?php
session_start();

// Clear the specific session variable
unset($_SESSION["umail"]);

// Alternatively, if you want to just reset it to an empty value:
// $_SESSION["umail"] = "";

// Redirect to index.php
header('Location: index.php');
exit;
?>
