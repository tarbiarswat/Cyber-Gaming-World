<?php
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/topbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="class.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

              

            <div class="form-group">
                <label> Text </label>
                <input type="text" name="text" class="form-control" placeholder="Enter Text">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="add_feedback" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Testing portal</h1>
            </div>


          <div class="card shadow mb-4">
            <div class="card-header py-3">
               
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">Add Data</button>
              </h6>
            </div>

  

            <div class="card-body">

              <div class="table-responsive">
              <?php
                  $query = "SELECT * FROM feedback ORDER BY id DESC";
                  $query_run = mysqli_query($connection, $query);
                  ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID </th>
                      <th>Text </th>
                      
                      <th>EDIT </th>
                      <th>DELETE </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>

                      <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['text']; ?></td>
                      <td>
                          <form action="editfeedback.php" method="post">
                            <input type="hidden" name="edit_id" >
                            <button  type="submit" name="edit_feedback" class="btn btn-success fa fa-edit"></button>
                          </form>
                      </td>
                      <td></td>
                      </tr>
                      <?php
                              }
                          }

                          else
                          {
                              echo "No Record Found";
                          }
                          ?>
                      
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
?>