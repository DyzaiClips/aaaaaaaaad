<?php 
session_start();

include('./model/users_model.php');


// print_r($_SESSION['users']);

header('Location: ./view/home.php');
#Després redirigir fent servir php al home.php