<?php  
include('session.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');
include('includes/db_config.php');   
?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        $query = "SELECT id FROM admins ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4 class="mb-0 font-weight-bold text-gray-800" >'.$row.'</h4>';
                      ?>
                      
                      </div>
                    
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Gamers</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                        $query = "SELECT id FROM gamers ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4 class="mb-0 font-weight-bold text-gray-800" >'.$row.'</h4>';
                      ?>

                      </div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Organizers</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          
                          <?php
                            $query = "SELECT o_id FROM organizers ORDER BY o_id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4 class="mb-0 font-weight-bold text-gray-800" >'.$row.'</h4>';
                          ?>
  
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sitemap fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Tournaments</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                        <?php
                          $query = "SELECT trn_id FROM tournaments ORDER BY trn_id";
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);
                          echo '<h4 class="mb-0 font-weight-bold text-gray-800" >'.$row.'</h4>';
                        ?>

                      </div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-10 py-6 border-bottom-info">
              <div class="card-body">
              <div style="text-align:center;" class="text-m font-weight-bold text-primary text-uppercase mb-1">Quick Links</div>
              </div>
              
          </div>

<div>
  &nbsp;
</div>

          <div class="row" >
            <div class="col-lg-4 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tournaments</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="img/undraw_posting_photo.svg" alt="...">
                        </div>
                        <a  href="view_tournaments.php">Browse all tournaments &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Game Updates</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15.5rem;"
                                src="img/gnews.png" alt="...">
                        </div>
                        <a  href="view_game_updates.php">Browse all game updates &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Games</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15.5rem;"
                                src="img/gaming-vector-1.png" alt="...">
                        </div>
                        <a  href="view_games.php">Browse all games &rarr;</a>
                    </div>
                </div>
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
