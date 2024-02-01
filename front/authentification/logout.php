<?php
session_start(); // Start the session (if not started already)

// Perform any additional logout actions, if needed
// For example, you may want to unset specific session variables

// Destroy all session data
session_destroy();

// Redirect to a login page or any other page after logout
header("Location: login.php");
exit();
?>
