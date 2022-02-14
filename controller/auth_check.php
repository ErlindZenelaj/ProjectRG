<?php 
    if(!isset($_SESSION['username'])){
        header("location: password-failed.php"); 
    }
?>