 <?php

if (
    isset($_POST["name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["role"])
) {

    $data = [
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