<?php  
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tournaments</h1>
            </div>

            <div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

            <div class="row" >

                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img
                        src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                        class="img-fluid"
                        />
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Button</a>
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
