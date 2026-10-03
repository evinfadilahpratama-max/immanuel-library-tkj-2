<?php

if (isset($_POST["name"]) && isset($_POST["description"])) {

    $data = [
        "name" => $_POST["name"],
        "description" => $_POST["description"]
    ];

    echo "Data kategori berhasil diterima:";

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}