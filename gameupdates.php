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
                    <h1>Game Updates</h1>
                    <p>All The Latest News</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>


<?php
$query = "SELECT * FROM game_updates ORDER BY gmu_id DESC";
$query_run = mysqli_query($connection, $query);
?>

<section aria-label="section">
    <div class="container">
        <div class="row">

        <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                <?php 
                                    echo "<img src='admin/img/game_updates/".$row['gmu_featured_image']."' >";
                                    ?>
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline"><?php echo $row['gameName']; ?></span>
                                    <span class="p-date"><?php echo $row['posted_at']; ?></span>
                                    <h4><a href="#"><span><?php echo $row['title']; ?></span></a></h4>
                                    <p></p>
                                    <a class="btn-main" href="#">Read more</a>
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