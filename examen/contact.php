<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Pirateca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>

    <h1>Contáctanos</h1>
    <section class="container-contact" style="padding-left: 40%; font-size: 26px;">
        <div class="div-contact">
            <form class="form-login" action="">
                <span><p>Nombre completo:</p></span>
                <input placeholder="" type="text" style="background-color: #ff7575;"></input><br>
                <span><p>Correo electrónico:</p></span>
                <input placeholder="" type="email" style="background-color: #ff7575;"></input><br>
                <span><p>Descripción:</p></span>
                <span><textarea name="description" id="" cols="30" rows="10" style="background-color: #ff7575; resize: none;"></textarea></span><br>
                <button class="button"> Enviar mensaje </button><br>
                <hr>
            </form>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7282.53188333418!2d-110.32507281282957!3d24.12729693655232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86afd349cb432c77%3A0xcabe9ed6d9b6119a!2sLa%20Sabrosa%20Helados!5e0!3m2!1ses-419!2smx!4v1637380150236!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>