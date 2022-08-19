<?php 

      include './partials/menu.php';

      include './partials/pizzas.php';

    include './partials/social.php';


?>

<?php
include './partials/header.php';
?>
    <main>
        <div class="container">
            <section class="pizzas">
            <?php
            if(empty($pizzas)){
                echo 'Pizzas not found';
            }else{
                
                foreach ($pizzas as $key => $value) {
                    ?>
              <article class="pizza-item">
                    <a href="/single-pizza.php?id=<?php echo $key; ?>">
                        <img src="<?php echo $value['image'];  ?>">
                    </a>
                  <?php  
                  
                   if($value['favorite'] === true){
                      ?>
                   <span class='favorite fa fa-heart'></span> 
                   <?php
                   }else{
                  ?>
                   <span class='favorite fa fa-heart-o'></span> 
                   <?php
                }
                ?>                                        
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title"><?php echo $value['name'] ;  ?></h3>
                        <div class="pizza-item-info-detail">
                            <p>
                          <span class="icon fa fa-clock-o"></span>
                                <span><?php echo $value['preparationTime'] ; ?>min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span><?php echo $value['rating'];?></span>
                            </p>
                        </div>
                    </div>
                </article>
            <?php
                }
            }
            
            ?>
                
                 </section>
        </div>
    </main>
            
         <!--       <article class="pizza-item">
                    <a href="/single-pizza.php?id=1">
                        <img src="./img/pizzas/margarita.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Margarita</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>15 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=2">
                    <img src="img/pizzas/vege.jpg">
                    </a>
                    <span class="favorite fa fa-heart"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Vege</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>15 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>4.80</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=3">
                    <img src="./img/pizzas/capricciosa.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Capricciosa</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>13 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=4">
                    <img src="./img/pizzas/supreme.jpg">
                    </a>
                    <span class="favorite fa fa-heart"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Supreme</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>10 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=5">
                    <img src="./img/pizzas/venezia.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Venezia</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>12 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>4.50</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=6">
                    <img src="./img/pizzas/mexico.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Mexico</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>10 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=7">
                    <img src="./img/pizzas/bergamo.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Bergamo</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>15 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=8">
                    <img src="./img/pizzas/romana.jpg">
                    </a>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Romana</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>14 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=9">
                    <img src="./img/pizzas/quattro-stagioni.jpg">
                    </a>
                    <span class="favorite fa fa-heart"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title">Quattro stagioni</h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span>15 min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span>5.00</span>
                            </p>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
-->

   <?php
    
    include './partials/footer.php';
    
    ?>


    <script src="./js/jquery.js" type="text/javascript"></script>
    <script src="./js/owl.carousel.js" type="text/javascript"></script>
    <script src="./js/main.js" type="text/javascript"></script>

</body>

</html>