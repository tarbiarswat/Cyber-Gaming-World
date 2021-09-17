<?php
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/topbar.php');
?>

<div class="container-fluid py-5">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile </h6>
  </div>
    <div class="card-body">

    <?php
    $connection = mysqli_connect("localhost","root","","cgw_db");

    if(isset($_POST['edit_admin_btn']))
    {
        $id = $_POST['edit_id'];
        $query = "SELECT * FROM admins WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
        
        foreach($query_run as $row)
        {
            ?>


            <form action="class.php" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="edit_id" value="" >
                <div class="form-group">
                    <label> Profile Photo </label>
                    <input type="file" name="profilePhoto" class="btn btn-primary">
                </div>
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label> Full Name </label>
                    <input type="text" name="edit_fullname" value="" class="form-control" placeholder="Enter Fullname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" value="" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="edit_password"  value="" class="form-control" placeholder="Enter Password">
                </div>
                <a href="adminlist.php" class = "btn btn-danger" > Cancel </a>
                <button type="submit" name="update_admin_btn" class ="btn btn-primary"> Update </button>
                </form>
            
            <?php
        }
    
    }
    ?>

    </div>
</div>

</div>
</div>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>