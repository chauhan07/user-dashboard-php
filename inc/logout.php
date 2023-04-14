<?php 
// If the logout button was clicked
session_start();
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();
  
    // Destroy the session
    session_destroy();
  
    // Redirect to a new page
    header("location: ../login.php");
    exit;
  }
?>