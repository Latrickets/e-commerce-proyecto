<?php
include_once 'lib/user.php';
include_once 'lib/userSession.php';

$userSession = new userSession();
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirateca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>
    
    <div style="height: 280px;">
        <section id="container-slider">	
            <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
              <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
              <li><a itlist="itList_1" href="#"></a></li>
              <li><a itlist="itList_2" href="#"></a></li>
            </ul>
            <ul id="slider">
              <li style="background-image: url('images/slider1.png'); z-index:0; opacity: 1;">
                
              </li>
              <li style="background-image: url('images/slider2.png'); ">
                
              </li>
              <li style="background-image: url('images/slider3.png'); ">
                
              </li>
           </ul>
         </section>
    </div>
    <div class=""></div>

    <br>
    

    <h1>Ofertas destacadas</h1>
    <section class="offers">
        <div class="containerHome">
            <div class="film">
                <img src="images/spiderverse_mini.png">
                <p>Spider-Man 4: Spiderverse liberado(2021)</p>
                <span>Antes: </span>
                <span class="price-no-desc">$40</span>
                <span>Ahora:</span>
                <span class="price-desc">$39</span>
            </div>
            <div class="film">
                <img src="images/cars_5.png">
                <p>Cars 5: La venganza de McQueen (2020)</p>
                <span>Antes: </span>
                <span class="price-no-desc">$32</span>
                <span>Ahora:</span>
                <span class="price-desc">$30</span>
            </div>
            <div class="film">
                <img src="images/la_pesada_mini.png">
                <p>La pesada (2021) + miniventilador de regalo</p>
                <span>Antes: </span>
                <span class="price-no-desc">$38</span>
                <span>Ahora:</span>
                <span class="price-desc">$37</span>
            </div>
            <div class="film">
                <img src="images/ryf_17_mini.png">
                <p>Rápidos y Furiosos 17: Toretto vs Vader(2022)</p>
                <span>Antes: </span>
                <span class="price-no-desc">$40</span>
                <span>Ahora:</span>
                <span class="price-desc">$38</span>
            </div>
            <div class="film">
                <img src="images/chema_venegas_mini.png">
                <p>Chema Venegas Reloaded(2020)</p>
                <span>Antes: </span>
                <span class="price-no-desc">$25</span>
                <span>Ahora:</span>
                <span class="price-desc">$22</span>
            </div>
        </div>
    </section>
    
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>