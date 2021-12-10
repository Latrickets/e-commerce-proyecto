<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Pirateca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>

    <h1>Registrarse</h1>
    <section class="section-login">
        <div class="container-login-logo">
            <img src="images/Logo_Pirateca_3.png" width="250px">
            <h2>Somos tu mejor opcion, compra tus peliculas en</h2>
        </div>
        <div class="container-registro">
            <form class="form-registro" action="" method="POST">
                <input class="login-input" placeholder="Nombre completo" type="text" name="nameR"></input><br>
                <input class="login-input" placeholder="Nombre de usuario" type="text" name="userR"></input><br>
                <input class="login-input" placeholder="Contraseña" type="password" name="passwordR"></input><br>
                <hr>
                <button class="btn-cuentaNueva" type="submit" name="registerR"> Crear cuenta nueva </button><br>
                <br>
            </form>
        </div>
        <?php
            include ("lib/registrar.php");
        ?>
    </section>

    
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>