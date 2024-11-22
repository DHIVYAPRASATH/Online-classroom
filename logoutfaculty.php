<?php
session_start();

// Clear the specific session variable
unset($_SESSION["fidx"]);

// Alternatively, to reset its value instead of removing it:
// $_SESSION["fidx"] = "";

// Redirect to index.php
header('Location: index.php');
exit;
?>
