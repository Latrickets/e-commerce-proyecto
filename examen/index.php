<?php
include_once 'lib/user.php';
include_once 'lib/userSession.php';

$userSession = new userSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Ya existe una sesion";
    $user->setUser($userSession->getCurrentUser());
    header("location: home.php");
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validacion de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    
    if($user->userExists($userForm, $passForm)){
        //echo "Usuario validado";

        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        header("location: home.php");
    }else{
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }

}else{
    //echo "Login";
    include_once 'login.php';
}


?>