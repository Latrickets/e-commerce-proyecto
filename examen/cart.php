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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>productos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <?php
        include 'layout/header.php';
    ?>

    <h1>Mi carrito</h1>
    <section class="container222">
        <table class="table" id="tabla">
            
        </table>
    </section>
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>