<?php
include('session.php'); 
include('includes/db_config.php'); 

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: ../index.php');
}

?>