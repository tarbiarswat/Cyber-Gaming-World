<?php  
include('includes/db_config.php');
?>


<section id="section-items" class="no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Featured Tournaments</h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>
            
            <div id="items-carousel" class="owl-carousel wow fadeIn">


                <?php
                $query = "SELECT * FROM tournaments ORDER BY trn_id DESC";
                $query_run = mysqli_query($connection, $query);
                ?>

                <div class="d-item">
                    
                    <div class="nft__item">
                        
                    <?php
                          if(mysqli_num_rows($query_run) > 0)
                          {
                              while($row = mysqli_fetch_assoc($query_run))
                              {
                                  ?>
                        
                        <div class="nft__item_wrap">
                            <a href="#">
                            <?php 
                            echo "<img style='width: 260px; border-radius: 15px;' src='admin/img/".$row['trn_featured_image']."' >";
                            ?>
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="#">
                                <h4>Valorant</h4>
                            </a>
                            <div class="nft__item_price">
                                120$<span>1/20</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Enter Tournament</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>50</span>
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
                    


                
                      
                    
            </div>
        </div>
    </div>
</section>