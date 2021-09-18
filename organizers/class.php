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
    $profilePhoto = $_FILES['profilePhoto']['name'];
    

    $target = "img/admins/".basename($profilePhoto);
    
    if($password === $cpassword)
    {
        $query = "INSERT INTO admins (profilePhoto, username, fullname, email_id, password) VALUES ('$profilePhoto', '$username', '$fullname', '$email_id', '$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['profilePhoto']['tmp_name'], $target);
            $_SESSION['success'] = 'Admin Added';
            header('location: adminslist.php');
        }
        else
        {
            $_SESSION['success'] = 'Admin is not Added';
            header('location: adminslist.php');
        }
    }
    else
    {
        $_SESSION['status'] = 'Password and Confirm Password does not match';
        header('location: adminslist.php');
    }

}




?>