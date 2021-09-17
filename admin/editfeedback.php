<?php
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/topbar.php');
?>

<div class="container-fluid py-5">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Feedback </h6>
  </div>
    <div class="card-body">

    <?php

    if(isset($_POST['edit_feedback']))
    {
        $id = $_POST['edit_id'];
        $query = "SELECT * FROM feedback WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
        
        foreach($query_run as $row)
        {
            ?>

                <form action="class.php" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="edit_id" value="1" >
                
                <div class="form-group">
                    <label> Text </label>
                    <input type="text" name="edit_text"  class="form-control" placeholder="Enter Text">
                </div>
                
                <a href="feedbacks.php" class = "btn btn-danger" > Cancel </a>
                <button type="submit" name="update_feedback_btn" class ="btn btn-primary"> Update </button>
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