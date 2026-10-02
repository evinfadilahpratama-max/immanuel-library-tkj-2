<?php

if (isset($_POST["id"])) {

    $data = [
        "id" => $_POST["id"],
        "title" => $_POST["title"],
        "isbn" => $_POST["isbn"],
        "year" => $_POST["year"],
        "stock" => $_POST["stock"],
        "category_id" => $_POST["category_id"],
        "description" => $_POST["description"],
        "author_ids" => isset($_POST["author_ids"])
            ? $_POST["author_ids"]
            : []
    ];

    echo "Data buku berhasil diterima:";

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}