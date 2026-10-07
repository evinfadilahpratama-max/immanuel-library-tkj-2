<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $bio = isset($_POST["bio"]) ? $_POST["bio"] : "";

    echo "<h1>Data Penulis Diterima</h1>";

    echo "<pre>";

    print_r([
        "id" => $id,
        "name" => $name,
        "bio" => $bio
    ]);

    echo "</pre>";

    echo '<br><a href="../../pages/authors/index.php">Kembali</a>';

} else {

    echo "<h1>Permintaan tidak valid.</h1>";

    echo '<br><a href="../../pages/authors/edit.php">Kembali</a>';
}