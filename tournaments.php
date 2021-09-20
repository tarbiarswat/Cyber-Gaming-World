<!DOCTYPE html>
<html lang="en">

<?php  
include('includes/header.php');
include('includes/db_config.php');

?>


<section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1>Tournaments</h1>
                    <p>Test Subtitle</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>



<section id="section-items" class="no-bottom">
    <div class="container">
        <div class="row">

            <?php
            $query = "SELECT * FROM tournaments ORDER BY trn_id DESC";
            $query_run = mysqli_query($connection, $query);
            ?>

            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Ongoing Tournaments</h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>

            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <span class="p-tagline"><?php echo $row['gameName']; ?></span>
                            <div class="nft__item_wrap">
                                <a href="">
                                <?php 
                            echo "<img src='admin/img/".$row['trn_featured_image']."' >";
                            ?>
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4><?php echo $row['tournament_title']; ?></h4>
                                </a>
                                <div class="nft__item_price">
                                    Player Capacity<span><?php echo $row['playerCapacity']; ?></span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Enter Tournament</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-money"></i><span><?php echo $row['tournamentType']; ?></span>
                                </div>                                 
                            </div> 
                        </div>
                
                    </div>
                    
                    <?php
                              }
                          }

                          else
                          {
                              echo "No Record Found";
                          }
                          ?>

   

        </div>
    </div>
</section>







<?php  include('includes/footer.php')  ?>

<?php  include('includes/scripts.php')  ?>

</body>

</html>