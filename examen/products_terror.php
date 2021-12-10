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
    <h1>Terror</h1>
    <section class="offers">
        <div class="container">
        <?php
            $response = json_decode(file_get_contents('http://localhost/weeeeeb/examen/api/productos/api-productos.php?categoria=terror'), true);
            //var_dump($response);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/films.php');
                }
            }else{
                //error
            }
        ?>
        </div>
    </section>
    <?php
        include 'layout/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>
</html>