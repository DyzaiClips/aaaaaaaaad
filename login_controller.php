<?php
session_start();
include('../functions/user_functions.php');
$username = $_POST['username'];
$password = $_POST['password'];

if(!checkUser($username, $password, $_SESSION['users'])){
    header('Location: ../view/login_view?error=1');
}
else{
    $_SESSION['user_logged'] = 
    header('Location: ../view/app_view.php');
};




//Només comprovar que el usuari pot fer login.
//fent servir la funció checkUser
//i gestionar error en cas que es produeixi

