
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
            <section class="single-pizza">
                
                <?php
                if(!isset($_GET['id'])){
                     ?>
                <h2>ERROR 404. Page don't exist</h2>
                 <a href="/pizzas.php">Back to Products</a>
                 <?php
                }else{
                if(array_key_exists($_GET['id'], $pizzas)){
                    
                    $pizzas = $pizzas[$_GET['id']];
                    
                    ?>
                   <aside class="pizza-image">
                       <img src="<?php echo $pizzas['image'];  ?>">
                </aside>
                <article class="pizza-detail">
                    <h1 class="pizza-title"><?php echo $pizzas['name'] ?></h1>
                    <p class="pizza-description">
                        <?php echo $pizzas['description'] ;?> 
                    </p>
                    <div class="price">
                        <p><b>Size:</b><span class="size"> M (<?php echo $pizzas['size']['M']['radius'];?>cm)</span> : <b class="price"><?php echo $pizzas['size']['M']["price"] ; ?></b> &euro;</p>
                        <p><b>Size:</b><span class="size"> L (<?php echo $pizzas['size']['L']['radius'];?>cm)</span> : <b class="price"><?php echo $pizzas['size']['L']["price"] ; ?></b> &euro;</p>
                        <p><b>Size:</b><span class="size"> XL (<?php echo $pizzas['size']['XL']['radius'];?>cm)</span> : <b class="price"><?php echo $pizzas['size']['XL']["price"] ; ?></b> &euro;</p>
                    </div>
                    <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizzas['preparationTime'] ; ?></span> min</p>
                    <p><b>Customer rate</b>: <span class="rate"><?php echo $pizzas['rating'] ?></span> <span class="fa fa-star"></span></p>

                </article>
                <?php
                }else{
                    ?>
                 
                  <h2>The product with the given parameters does not exist</h2>
            <a href="/pizzas.php">Back to Product</a>
            <?php
                }
                }
                ?>
                </section>
        </div>
    </main>
               <!-- <aside class="pizza-image">
                    <img src='./img/pizzas/venezia.jpg'>
                </aside>
                <article class="pizza-detail">
                    <h1 class="pizza-title">Margarita</h1>
                    <p class="pizza-description">
                        Sometimes you just can’t beat fresh, simple, and classic Margarita Pizza.  
                    </p>
                    <div class="price">
                        <p><b>Size:</b><span class="size"> M (27cm)</span> : <b class="price">5</b> &euro;</p>
                        <p><b>Size:</b><span class="size"> L (32cm)</span> : <b class="price">8</b> &euro;</p>
                        <p><b>Size:</b><span class="size"> XL (42cm)</span> : <b class="price">10</b> &euro;</p>
                    </div>
                    <p><b>Preparation time</b>: <span class="preparation-time">15</span> min</p>
                    <p><b>Customer rate</b>: <span class="rate">5</span> <span class="fa fa-star"></span></p>

                </article>
               -->
           


    <?php
    
    include './partials/footer.php';
    
    ?>


    <script src="./js/jquery.js" type="text/javascript"></script>
    <script src="./js/owl.carousel.js" type="text/javascript"></script>
    <script src="./js/main.js" type="text/javascript"></script>

</body>

</html>
