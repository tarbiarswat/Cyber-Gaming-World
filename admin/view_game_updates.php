<?php  
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Game Updates</h1>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">List of Tournaments 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">List of Tournaments</button>
                  </h6>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                    <?php
                      $query = "SELECT * FROM tournaments ORDER BY trn_id DESC";
                      $query_run = mysqli_query($connection, $query);
                      ?>

                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>ID </th>
                            <th>Game Updates Title </th>
                            <th>Game Name </th>
                            <th>Description </th>
                            <th>source Link </th>
                            <th>Featured Images</th>
                    
                            <th>Posted At </th>
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
                            <td><?php echo $row['gmu_id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['gameName']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['sourceLink']; ?></td>
                            <td><?php echo $row['gmu_featured_image']; ?> Days</td>
                            <td><?php echo $row['posted_at']; ?></td>
                            <td><?php 
                            echo "<img style='width: 144px; border-radius: 15px;' src='img/".$row['trn_featured_image']."' >";
                            ?>
                            </td>
                            
                            <td></td>
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
  
</body>

</html>
<?php  
 
include('includes/scripts.php');  
 
?>
