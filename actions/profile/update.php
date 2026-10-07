<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {

    $userId = isset($_POST["user_id"]) ? $_POST["user_id"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $bio = isset($_POST["bio"]) ? $_POST["bio"] : "";

    echo "<h1>Data Profil Diterima</h1>";

    echo "<pre>";

    print_r([
        "user_id" => $userId,
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "address" => $address,
        "bio" => $bio
    ]);

    echo "</pre>";

    echo '<br><a href="../../pages/profile/edit.php">Kembali</a>';

} else {

    echo "<h1>Permintaan tidak valid.</h1>";

    echo '<br><a href="../../pages/profile/edit.php">Kembali</a>';
}