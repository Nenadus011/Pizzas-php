<?php 

   include './partials/menu.php';

 

   include './partials/aboutSection.php';

    include './partials/social.php';


?>

<?php
include './partials/header.php';
?>
    <main>
        <div class="container">
            <?php
            if(empty($aboutSections)){
                echo 'page does not exist';
            }else{
                ?>
             <section class="about-section">
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['about']['image'];?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['about']['title'];?></h2>
                    <div class="about-info-data">
                       <?php echo $aboutSections['about']['fullText'];?>
                    </div>
                </article>
            </section>
           
            
          
            <section class="about-section" id="preparation">
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['preparation']['title'];?></h2>
                    <div class="about-info-data">
                       <?php echo $aboutSections['preparation']['fullText'];?>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['preparation']['image'];?>" alt="">
                </aside>
            </section>
            <section class="about-section" id="quality">
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['quality']['image'];?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['quality']['title'];?></h2>
                    <div class="about-info-data">
                       <?php echo $aboutSections['quality']['fullText'];?>
                    </div>
                </article>

            </section>
            <section class="about-section" id="fresh">
                <article class="about-info">
                    <div class="about-info-data">
                        <h2 class="section-title"><?php echo $aboutSections['fresh']['title'];?></h2>
                        <div class="about-info-data">
                            <?php echo $aboutSections['fresh']['fullText'];?>
                        </div>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['fresh']['image'];?>" alt="">
                </aside>
            </section>
           
            <?php
            }
            ?>


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