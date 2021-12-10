<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Pirateca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>
    <h1>Iniciar sesión</h1>
    <section class="section-login">
        <div class="container-login-logo">
            <img src="images/Logo_Pirateca_3.png" width="250px">
            <h2>Somos tu mejor opcion, compra tus peliculas en</h2>
        </div>
        <div class="container-login">
            <form class="form-login" action="" method="POST">
                <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>
                <input class="login-input" placeholder="Correo electrónico o número de teléfono" type="text" name="username"></input><br>
                <input class="login-input" placeholder="Contraseña" type="password" name="password"></input><br>
                <button class="btn-login" type="submit"> Iniciar sesión </button><br>
                <h4>¿Olvidaste tu contraseña?</h4><br>
                <hr>
                <button class="btn-cuentaNueva"><a href="register.php"> Crear cuenta nueva </a></button><br>
                <br>
            </form>
        </div>
    </section>
    
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>