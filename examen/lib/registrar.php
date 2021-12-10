<?php
    require 'conexion.php';

    if(isset($_POST['registerR'])){
        if(strlen($_POST['nameR']) > 1 && strlen($_POST['userR']) >1 && strlen($_POST['passwordR']) > 1){
            $name = trim($_POST['nameR']);
            $user = trim($_POST['userR']);
            $pass = trim($_POST['passwordR']);
            $query = "INSERT INTO usuarios (id, nombre, username, password)VALUES (0,'$name','$user','$pass')";

            $res = mysqli_query($conectar, $query);
            if($res){
                echo '<script type="text/javascript"> alert("Se guardo al usuario");</script>';
            }else{
                echo '<script type="text/javascript"> alert("No se pudo guardar la solicitud");</script>';
            }
        }else{
            echo '<script type="text/javascript"> alert("Error! Hay campos vacios");</script>';
        }
    }

?>