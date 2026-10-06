<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";

    echo "<h1>Data Kategori Diterima</h1>";

    echo "<pre>";

    print_r([
        "id" => $id,
        "name" => $name,
        "description" => $description
    ]);

    echo "</pre>";

    echo '<br><a href="../../pages/categories/index.php">Kembali</a>';

} else {

    echo "<h1>Permintaan tidak valid.</h1>";

    echo '<br><a href="../../pages/categories/edit.php">Kembali</a>';
}   