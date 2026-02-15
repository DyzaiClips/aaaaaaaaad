<?php
$users = [
    [
        "id" => 0,
        "name" => "Toni Fernandez",
        "username" => "admin",
        "contrasenya" => "123",
        "admin" => true
    ],
    [
        "id" => 1,
        "name" => "Raquel Boronat",
        "username" => "raquel",
        "contrasenya" => "123",
        "admin" => false
    ]
];
$_SESSION['users'] = $users;