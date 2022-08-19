

<footer>
        <div class="container">
            <p>&copy; All right reserved. <a href="https://cubes.edu.rs">Cubes Scholl</a></p>
            <nav class="social">
                <?php
                foreach ($social as $key => $value) {
                    ?>
                <a href="<?php echo $value["link"] ?>" class="<?php echo $value["icon"]?>" target="_blank"></a>
                <?php
                }
                ?>
            </nav>
        </div>
    </footer>