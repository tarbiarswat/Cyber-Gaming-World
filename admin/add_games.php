<?php  
include('includes/db_config.php');
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">


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
                                                <label for="gameName" class="">Game Name</label>
                                                <input type="text" name="gameName" id="gameName" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 mb-4">
                                                <div class="form-group">
                                                    <label>Select Game Category</label>
                                                    <select name="gameCat" class="form-control">
                                                        <option type="text" name="gameCat" value="Action">Action</option>
                                                        <option type="text" name="gameCat" value="Racing" >Racing</option>
                                                        <option type="text" name="gameCat" value="Strategy">Strategy</option>
                                                        <option type="text" name="gameCat" value="Cards">Cards</option>
                                                        <option type="text" name="gameCat" value="Casino">Casino</option>
                                                    </select>
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="row text-left">
                                            <div class="col-md-6 mb-4">
                                                <div class="md-form md-outline">
                                                    <label for="gameDesc">Game Description</label>
                                                    <textarea type="text" name="gameDesc" id="gameDesc" class="md-textarea form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <div class="md-form md-outline">
                                                <label for="gameDeveloperName" class="">Developer Name</label>
                                                <input type="text" name="gameDeveloperName" id="gameDeveloperName" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-2 mb-4">

                                                <div class="md-form md-outline">
                                                <label for="gameRating" class="">Game Rating</label>
                                                <input type="text" name="gameRating" id="gameRating" class="form-control">
                                                </div>

                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-md-2 mb-4">
                                                <label for="g_featured_image" class="">Upload Featured Image</label>
                                                <input type="file" name="g_featured_image" class="btn btn-primary">
                                            </div>

                                        </div>
                                        

                                        <button type="submit" name="submit_games" class="btn btn-primary">Submit Data </button>

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
