<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:login_try.php");  /* Redirect to login page */
exit;
?>