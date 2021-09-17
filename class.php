<?php
include('session.php'); 
include('includes/db_config.php'); 

if(isset($_POST['gamers_register']))
{
    
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_profilePhoto = $_FILES['user_profilePhoto']['name'];
    

    $target = "gamers/img/profilephotos/".basename($user_profilePhoto);
    
    if($password === $cpassword)
    {
        $query = "INSERT INTO gamers (username, fullname, email_id, password, user_profilePhoto) VALUES ('$username', '$fullname', '$email_id', '$password', '$user_profilePhoto')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['user_profilePhoto']['tmp_name'], $target);
            header('location: gamers/index.php');
        }
        else
        {
            $_SESSION['success'] = 'Admin is not Added';
            header('location: register.php');
        }
    }
    else
    {
        $_SESSION['status'] = 'Password and Confirm Password does not match';
        header('location: register.php');
    }

}

if(isset($_POST['gamers_login']))
{
    
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM gamers WHERE email_id = '$email_id' AND password = '$password'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['email_id'] = $email_id ;
        header('Location: gamers/index.php');
    }
    else
    {
        $_SESSION['status'] = 'Wrong Email ID or Password ';
        header('Location: g-login.php');
    }

}


?>