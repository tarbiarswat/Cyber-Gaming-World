<?php  
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Game Updates</h1>
            </div>

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Game Updates Details</h6>
                </div>
                

                    <section class="section card mb-5">

                        <div class="card-body">

                            <form action="class.php" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-4 mb-4">
                                        <div class="md-form md-outline">
                                        <label for="title" class="">Game Updates Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="row text-left">
                                    <div class="col-md-6 mb-4">
                                        <div class="md-form md-outline">
                                            <label for="gameName">Game Name</label>
                                            <input type="text" name="gameName" id="gameName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row text-left">
                                    <div class="col-md-6 mb-4">
                                        <div class="md-form md-outline">
                                            <label for="description">Game Updates Description</label>
                                            <textarea type="text" name="description" id="description" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">

                                    <div class="col-md-2 mb-4">

                                        <div class="md-form md-outline">
                                        <label for="sourceLink" class="">Source Link</label>
                                        <input type="text" name="sourceLink" id="sourceLink" class="form-control">
                                        </div>

                                    </div>
                                    </div>


                                    <div class="row">

                                    <div class="col-md-2 mb-4">
                                        <label for="gmu_featured_image" class="">GMU Featured Image</label>
                                        <input type="file" name="gmu_featured_image" class="btn btn-primary">
                                    </div>

                                    </div>


                                    <button type="submit" name="submit_game_updates" class="btn btn-primary">Submit Data </button>

                                    
                        </div>

                            </form>

                            </div>



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
include('includes/footer.php'); 
?>
