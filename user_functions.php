<?php

function checkUser($username, $password, $users) {

    foreach ($users as $value) {
        if($value['username'] == $username){
            if($value['contrasenya'] == $password){
                return true;
            }
            else{
            return false;
            };
        }
        else{
            return false;
        };
        };
    }
    //metode per comprovar usuari i passwordson correctes



function usernameCorrect ($username) {
    //regex pel nom d'usuari en minuscules i numeros
    $regex = '/^[a-z0-9]{1,10}$/';
    if(preg_match($regex, $username)){
        return true;
    }
    else{
        return false;
    }

}

function userExist($users,$username) {
    //metodo per comprovar que el usuari que li passem
    //no existeix a l'aplicació

}

