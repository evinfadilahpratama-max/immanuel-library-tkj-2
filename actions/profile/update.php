<?php

if (
    isset($_POST["name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["address"]) &&
    isset($_POST["bio"])
) {

    $data = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "address" => $_POST["address"],
        "bio" => $_POST["bio"]
    ];

    echo "Data profil berhasil diterima:";

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}