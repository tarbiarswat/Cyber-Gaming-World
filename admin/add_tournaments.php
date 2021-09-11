<?php  
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>


<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Tournaments</h1>
            </div>

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tournament Details</h6>
                </div>
                

                    <section class="section card mb-5">

                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4 mb-4">

                                    <div class="md-form md-outline">
                                    <label for="tournaments_title" class="">Tournament Title</label>
                                    <input type="text" name="tournaments_title" id="tournaments_title" class="form-control">
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                <label for="f2" class="">Game Name</label>
                                    <fieldset class="form-check mb-4">
                                    <input class="form-check-input" name="group1" type="radio" id="Valorant" checked="checked">
                                    <label class="form-check-label" for="Valorant">Valorant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input class="form-check-input" name="group1" type="radio" id="radio2">
                                    <label class="form-check-label" for="radio2">Call of Duty &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input class="form-check-input" name="group1" type="radio" id="radio3">
                                    <label class="form-check-label" for="radio3">GTA V Online &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    </fieldset>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                <label for="f2" class="">Tournament Type</label>
                                    <fieldset class="form-check mb-4">
                                    <input class="form-check-input" name="group2" type="radio" id="radio1" checked="checked">
                                    <label class="form-check-label" for="radio1">Free &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input class="form-check-input" name="group2" type="radio" id="radio2">
                                    <label class="form-check-label" for="radio2">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    
                                    </fieldset>
                                </div>
                            </div>

                            <!--
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                <label for="f2" class="">Tournament Type</label>
                                    <fieldset class="form-check mb-4">
                                    <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                                    <label class="form-check-label" for="radio1">Free &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input class="form-check-input" name="group1" type="radio" id="radio2">
                                    <label class="form-check-label" for="radio2">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    
                                    </fieldset>
                                </div>
                            </div>
                            -->


                            <div class="row text-left">

                                <div class="col-md-6 mb-4">

                                    <div class="md-form md-outline">
                                    <label for="form101">Tournament Description</label>
                                    <textarea type="text" id="form101" class="md-textarea form-control" rows="3"></textarea>
                                    </div>

                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-2 mb-4">

                                    <div class="md-form md-outline">
                                    <label for="f3" class="">Tournament Duration</label>
                                    <input type="text" id="f3" class="form-control">
                                    </div>

                                </div>

                                <div class="col-md-2 mb-4">

                                    <div class="md-form md-outline">
                                    <label for="f3" class="">Player Capacity</label>
                                    <input type="text" id="f3" class="form-control">
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-2 mb-4">
                                    <label for="f4" class="">Upload Featured Image</label>
                                    <input type="file" class="btn btn-primary">
                                </div>

                            </div>

                            <button type="button" class="btn btn-primary">
                            Submit Data 
                            </button>





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
