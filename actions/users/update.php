<?php

if (isset($_POST["id"])) {

    $data = [
        "id" => $_POST["id"],
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "role" => $_POST["role"]
    ];

    echo "Data pengguna berhasil diterima:";

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}