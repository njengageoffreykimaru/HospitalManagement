<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy the session to logout the user
    session_destroy();
}

// Redirect to the login page or any other page you want after logging out
header("Location: index.html");
exit();
?>
