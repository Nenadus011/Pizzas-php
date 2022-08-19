<?php 

     include './partials/menu.php';

     include './partials/slider.php';

     include './partials/homepageAbout.php';


    include './partials/social.php';


?>



<?php
include './partials/header.php';
?>


        <main>
            <div class="container">
                <section class="hero-section">
                    <?php
                    if(empty($slider)){
                    echo 'Slider is not found';
                    }else{
                        
                    foreach ($slider as $key => $value) {
                      
                        ?>
                     <div class="hero-slider owl-carousel">
                        <!--Item start-->
                        <div class="hero-item">
                            <img src="<?php echo $value['image'];?>" alt="">
                            <div class="caption">
                                <h2><?php echo $value['title'];?></h2>
                                <p>
                                 <?php echo $value['sliderDesc']; ?>
                                </p>
                                <a class="btn" href="<?php echo $value['link'];  ?>">Read More</a>
                            </div>
                        </div><!--Item end-->
                   
            <?php
                        

                    }
                        
                        
                    }
                    
                  ?>  
                        
                          </div>
                </section>
            
                    
                    
                 
                <section class="about-section">
                    
                    <?php
                    
                    if(empty ($homepageAbout)){
                        echo 'Page About do not exist';
                    }else{
                      
                        
                            ?>
                     <aside class="about-image">
                        <img src="<?php echo $homepageAbout['image'];?>" alt="">
                    </aside>
                    <article class="about-info">
                        <h2><?php echo $homepageAbout['title'];?></h2>
                        <p>
                           <?php echo $homepageAbout["aboutDesc"];?>
                        </p>
                        <a href="<?php echo $homepageAbout['link'];?>" class="btn">Read More</a>
                    </article>
                    <?php
                           
                        
                        
                    }
                    
                    ?>
                    
                </section>
                
                
            </div>
        </main>
        
        
       <?php
    
    include './partials/footer.php';
    
    ?>
        
        
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/owl.carousel.js" type="text/javascript"></script>
        <script src="./js/main.js" type="text/javascript"></script>
        
    </body>
</html>
