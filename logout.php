<?php
session_start();
session_unset();      // Unset all session variables
session_destroy();    // Destroy the sessions

session_start();
$_SESSION['success_msg'] = "Logged out successfully.";
header("Location: index.php");
exit;
