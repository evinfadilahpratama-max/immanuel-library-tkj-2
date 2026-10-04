<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $isbn = isset($_POST["isbn"]) ? $_POST["isbn"] : "";
    $year = isset($_POST["year"]) ? $_POST["year"] : "";
    $stock = isset($_POST["stock"]) ? $_POST["stock"] : "";
    $categoryId = isset($_POST["category_id"]) ? $_POST["category_id"] : "";
    $authorIds = isset($_POST["author_ids"]) ? $_POST["author_ids"] : [];
    $description = isset($_POST["description"]) ? $_POST["description"] : "";

    echo "<h1>Data Buku Diterima</h1>";

    echo "<pre>";

    print_r([
        "title" => $title,
        "isbn" => $isbn,
        "year" => $year,
        "stock" => $stock,
        "category_id" => $categoryId,
        "author_ids" => $authorIds,
        "description" => $description
    ]);

    echo "</pre>";

} else {

    echo "<h1>Permintaan tidak valid.</h1>";

}
echo '<br><a href="../../pages/books/create.php">Kembali</a>';