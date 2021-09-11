<?php
include('session.php'); 
include('includes/db_config.php'); 

if(isset($_POST['login_btn']))
{
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE email_id = '$email_id' AND password = '$password'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['email_id'] = $email_id ;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Wrong Email ID or Password ';
        header('Location: login.php');
    }
 
}



?>