<header class="header">
        <div class="header-top">
            <div class="logo">
                <a class=""href="index.php"><img src="images/Logo_Pirateca_3.png" alt=""></a>
            </div>
            <div class="interactions">
                <input type="search" id="search-box" placeholder="Buscar...">
                <label for="search-box" class="fas fa-search"></label>
                <!-- <button class="fas fa-search"></button> -->
                <!-- <div><a id="compras" href="#">Mis compras</a></div> -->
                <div><a class="fas fa-shopping-cart" id="cart-btn" href="cart.php"></a></div>
                
                <?php
                if(isset($_SESSION['loggedin'])){
                    echo '<div><a class="" id="cart-btn" href="lib/logout.php">Cerrar sesion</a></div>';
                }else{
                    echo '<div><a class="fas fa-user" id="cart-btn" href="index.php"></a></div>';
                }
                //echo '<div><a class="" id="cart-btn" href="lib/logout.php">Cerrar sesion</a></div>';
                ?>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="navbar">
                <a href="products.php">Todas</a>
                <a href="products_estrenos.php">Estrenos</a>
                <a href="products_accion.php">Acción</a>
                <a href="products_ciencia_ficcion.php">Ciencia ficción</a>
                <a href="products_comedia.php">Comedia</a>
                <a href="products_documental.php">Documental</a>
                <a href="products_drama.php">Drama</a>
                <a href="products_fantasia.php">Fantasía</a>
                <a href="products_musical.php">Musical</a>
                <a href="products_romance.php">Romance</a>
                <a href="products_suspenso.php">Suspenso</a>
                <a href="products_terror.php">Terror</a>
                
            </nav>
        </div>
    </header>