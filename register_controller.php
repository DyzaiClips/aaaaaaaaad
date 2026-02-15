<?php
session_start();
include('../functions/user_functions.php');
$id_user = 4;
// foreach ($_SESSION['users'] as $value) {
//     if ($value['id'] > $id_user) {
//         $id_user = $value["id"];
//     }
// }

$name = $_POST['name'];
$username = $_POST['username'];
$Contrasenya = $_POST['pass2'];
$admin = false;

if(!usernameCorrect($username)){
    header('Location: ../view/login_view?error=2');
}

$user = [["id" => $id_user,
        "name" => $name,
        "username" => $username,
        "contrasenya" => $Contrasenya,
        "admin" => $admin
    ]];

array_push($_SESSION['users'] , $user);

header('Location: ../view/login_view.php');
//cal comporvar que l'usuari compleix el regex del username
//fent servir la funció usernameCorrect

//cal comprovar que el nou usuari no existeix dins el model
//fent servir la funció userExist

//En cas que el username existeixi cal generar un error a la vista
//En cas que el username no satisfa regex cal gener un error al a vista