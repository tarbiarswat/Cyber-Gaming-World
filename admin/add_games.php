<?php  
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

                    <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-m font-weight-bold text-primary text-uppercase mb-1">Total Games</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                            <h4 class="mb-0 font-weight-bold text-gray-800" >15</h4>

                            </div>
                            
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

        

                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Game Details</h6>
                        </div>


                            <section class="section card mb-5">

                                <div class="card-body">

                                    <form action="class.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="col-md-4 mb-4">
                                                <div class="md-form md-outline">
                                                <label for="tournament_title" class="">Game Name</label>
                                                <input type="text" name="tournament_title" id="tournament_title" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 mb-4">
                                                <div class="form-group">
                                                    <label>Select Game Category</label>
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="row text-left">
                                            <div class="col-md-6 mb-4">
                                                <div class="md-form md-outline">
                                                    <label for="tournamentDesc">Game Description</label>
                                                    <textarea type="text" name="tournamentDesc" id="tournamentDesc" class="md-textarea form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <div class="md-form md-outline">
                                                <label for="duration" class="">Developer Name</label>
                                                <input type="text" name="duration" id="duration" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-2 mb-4">

                                                <div class="md-form md-outline">
                                                <label for="playerCapacity" class="">Game Ranking</label>
                                                <input type="text" name="playerCapacity" id="playerCapacity" class="form-control">
                                                </div>

                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-md-2 mb-4">
                                                <label for="trn_featured_image" class="">Upload Featured Image</label>
                                                <input type="file" name="trn_featured_image" class="btn btn-primary">
                                            </div>

                                        </div>
                                        

                                        <button type="submit" name="submit_tournament" class="btn btn-primary">Submit Data </button>

                                    </form>





                                </div>

                            </section>



                            


                        </div>
        
        


        </div>
    </div>
</div>
  
</body>

</html>
<?php  
 
include('includes/scripts.php');  
 
?>
