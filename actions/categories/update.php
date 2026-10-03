<?php

if (isset($_POST["id"])) {

    $data = [
        "id" => $_POST["id"],
        "name" => $_POST["name"],
        "description" => $_POST["description"]
    ];

    echo "Data kategori berhasil diterima:";

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}