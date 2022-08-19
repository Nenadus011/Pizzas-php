<?php 
      include './partials/menu.php';

    
    $contactMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs";
    
    
    include './partials/social.php';
    
include './partials/header.php';
?>

<?php
if(isset($_POST['send']) && $_POST['send'] === 'contact'){
    
    $formData = $_POST;
    
    $formErrors = array();
    
    if(!isset($formData['name'])){
       $formErrors['required'][] = 'Name not provided'; 
    }else{
        $name = trim($formData['name']);
        
        if(empty($name)){
            $formErrors['name'][] = 'Name is required';
        }
    }
    
    if(!isset($formData['email'])){
        $formErrors['required'][] = 'Email not provided';
    }else{
        $email = trim($formData['email']);
        
        if(empty($email)){
            $formErrors['email'][] = 'Email is required';
        }
        
        if(strpos($email, '@') < 2){
            $formErrors['email'][] = 'Please provide valid email address';
        }
        
    }
    if(!isset($formData['message'])){
        $formErrors['required'][] = 'Message not provided';
    }else{
        $message = trim($formData['message']);
        
        if(empty($message)){
            $formErrors['message'][] = 'Message is required';
        }
    }
 
    }

?>




<body>
    <main>
        <div class="container">
            <section class="contact-section">
                   
                <aside class="form-wrapper">            
                    <form method="POST" action="" class="contact-form">
                        <div class="form-group">
                            <label for='name'>Your Name*</label>
                            <input type="text" name="name" id='name' value="" class="form-control" />
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email*</label>
                            <input type="email" name="email" id="email" value="" class="form-control" />
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea name="message" id="message" value="" class="form-control" rows="7"></textarea>
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="send" value="contact" class="btn">Send Message</button>
                        </div>
                    </form>                  
                      <?php
                
                if(isset($formErrors)){
                    
                    if(empty($formErrors)){
                        ?>
                <div class="success-wrapper">
                         <?php echo 'Your message has been sent successfully.Thanks for message'; ?>
                        </div>
                <?php
                    }else{
                        
                        if(array_key_exists('required', $formErrors)){
                            ?>
                <div class="error-wrapper">
                         <?php echo implode('<br', $formErrors['required']) ?>
                        </div>
                
                <?php
                        }else{
                            ?>
                <div class="error-wrapper">
                    <?php  
                    if(array_key_exists('name', $formErrors)) {
                       echo implode('<br>', $formErrors['name']). '<br>';
                    }
                    
                     if(array_key_exists('email', $formErrors)) {
                       echo implode('<br>', $formErrors['email']). '<br>';
                    }
                    
                     if(array_key_exists('message', $formErrors)) {
                       echo implode('<br>', $formErrors['message']). '<br>';
                    }
                       
                            ?>
                </div>
                
                <?php
                        }
                        
                                
                    }
                    
                }
                
                ?>                        
                       <!-- <div class="error-wrapper">

                        </div>
                        <div class="success-wrapper">
                            
                        </div>-->
                          
                    
                </aside>

                <div class="contact-map">
                    <iframe src="<?php echo $contactMap  ?>"></iframe>
                </div>
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
   
