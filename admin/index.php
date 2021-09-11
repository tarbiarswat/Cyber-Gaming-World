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
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tota Organizers</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          
                          <h4 class="mb-0 font-weight-bold text-gray-800" ></h4>
  
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Games</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <h4 class="mb-0 font-weight-bold text-gray-800" ></h4>

                      </div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
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
