
<?php
session_start(); //creates a session or resumes the current one based on a session identifier passed via a GET or POST request
if(!isset($_SESSION["username"])){ //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL
header("Location: login.php"); //The header() function is an inbuilt function in PHP which is used to send a raw HTTP header
exit(); }
?>
