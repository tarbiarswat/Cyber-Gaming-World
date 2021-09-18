<?php  
include('includes/db_config.php');
?>


<section id="section-items" class="no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Latest Tournaments</h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>


            <?php
            $query = "SELECT * FROM tournaments ORDER BY trn_id DESC LIMIT 4";
            $query_run = mysqli_query($connection, $query);
            ?>

            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="">                                    
                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
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