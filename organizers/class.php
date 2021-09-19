<?php

include('includes/db_config.php'); 

if(isset($_POST['organizers_register']))
{
    
    $username = $_POST['username'];
    $fullName = $_POST['fullName'];
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $o_profilePhoto = $_FILES['o_profilePhoto']['name'];
    

    $target = "img/profilephotos/".basename($o_profilePhoto);
    
    if($password === $cpassword)
    {
        $query = "INSERT INTO organizers (username, fullName, email_id, password, o_profilePhoto) VALUES ('$username', '$fullName', '$email_id', '$password', '$o_profilePhoto')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['o_profilePhoto']['tmp_name'], $target);
            header('location: index.php');
        }
        else
        {
            header('location: register.php');
        }
    }


}

if(isset($_POST['organizer_login']))
{
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM organizers WHERE email_id = '$email_id' AND password = '$password'";
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

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

?>