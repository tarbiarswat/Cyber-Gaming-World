<?php  
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-0">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Games</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                            <?php
                                $query = "SELECT game_id FROM games ORDER BY game_id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h4 class="mb-0 font-weight-bold text-gray-800" >'.$row.'</h4>';
                            ?>

                            </div>
                            
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="card mb-10 py-6 border-bottom-info">
                    <div class="card-body">
                    <div style="text-align:center;" class="text-m font-weight-bold text-primary text-uppercase mb-1">All Published Games</div>
                    </div>
                    
                </div>


                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                  

                        <div class="card-body">

                            <div class="table-responsive">

                                <?php
                                $query = "SELECT * FROM games ORDER BY game_id DESC";
                                $query_run = mysqli_query($connection, $query);
                                ?>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Game Name </th>
                                        <th>Game Category </th>
                                        <th>Game Description </th>
                                        <th>Developer Name</th>
                                        <th>Game Ranking </th>
                                        <th>Featured Image </th>
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
                                        <td><?php echo $row['game_id']; ?></td>
                                        <td><?php echo $row['gameName']; ?></td>
                                        <td><?php echo $row['gameCat']; ?></td>
                                        <td><?php echo $row['gameDesc']; ?></td>
                                        <td><?php echo $row['gameDeveloperName']; ?> Days</td>
                                        <td><?php echo $row['gameRating']; ?></td>
                                        <td><?php 
                                        echo "<img style='width: 144px; border-radius: 15px;' src='img/games/".$row['g_featured_image']."' >";
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
</div>
  
</body>

</html>
<?php  
 
include('includes/scripts.php');  
 
?>
