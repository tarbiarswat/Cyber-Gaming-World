<?php
include('session.php'); 
include('includes/db_config.php'); 

if(isset($_POST['organizers_register']))
{
    
    $username = $_POST['username'];
    $fullname = $_POST['fullName'];
    $email_id = $_POST['email_id'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $o_profilePhoto = $_FILES['o_profilePhoto']['name'];
    

    $target = "img/profilephotos/".basename($o_profilePhoto);
    
    if($password === $cpassword)
    {
        $query = "INSERT INTO organizers (username, fullname, email_id, password, o_profilePhoto) VALUES ('$username', '$fullname', '$email_id', '$password', '$profilePhoto')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['o_profilePhoto']['tmp_name'], $target);
            $_SESSION['success'] = 'Membership Added';
            header('location: index.php');
        }
        else
        {
            $_SESSION['success'] = 'Membership is not Added';
            header('location: o-register.php');
        }
    }
    else
    {
        $_SESSION['status'] = 'Password and Confirm Password does not match';
        header('location: o-register.php');
    }

}




?>