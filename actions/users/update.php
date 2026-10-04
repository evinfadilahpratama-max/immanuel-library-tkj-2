<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $role = isset($_POST["role"]) ? $_POST["role"] : "";

    echo "<h1>Data Pengguna Diterima</h1>";

    echo "<pre>";

    print_r([
        "id" => $id,
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "role" => $role
    ]);

    echo "</pre>";

} else {

    echo "<h1>Permintaan tidak valid.</h1>";

}