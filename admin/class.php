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

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

if(isset($_POST['submit_tournament']))
{

    $tournament_title = $_POST['tournament_title'];
    $gameName = $_POST['gameName'];
    $tournamentType = $_POST['tournamentType'];
    $tournamentDesc = $_POST['tournamentDesc'];
    $duration = $_POST['duration'];
    $playerCapacity = $_POST['playerCapacity'];
    $trn_featured_image = $_FILES['trn_featured_image']['name'];

    $target = "img/".basename($trn_featured_image);
    

        $query = "INSERT INTO tournaments (tournament_title, gameName, tournamentType, tournamentDesc, duration, playerCapacity, trn_featured_image) VALUES ('$tournament_title', '$gameName', '$tournamentType', '$tournamentDesc', '$duration', '$playerCapacity', '$trn_featured_image')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['trn_featured_image']['tmp_name'], $target);
            header('location: view_tournaments.php');
        }
        else
        {
            
            header('location: add_tournaments.php');
        }

}


if(isset($_POST['add_admin']))
{
    $profilePhoto = $_FILES['profilePhoto']['name'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    

    $target = "img/admins/".basename($profilePhoto);
    

        $query = "INSERT INTO admins (profilePhoto, username, fullname, email_id, password) VALUES ('$profilePhoto', '$username', '$fullname', '$email_id', '$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['profilePhoto']['tmp_name'], $target);
            header('location: adminslist.php');
        }
        else
        {
            
            header('location: index.php');
        }

}




?>
