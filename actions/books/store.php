PHP
<?php

if (
    isset($_POST["title"]) &&
    isset($_POST["isbn"]) &&
    isset($_POST["year"]) &&
    isset($_POST["stock"]) &&
    isset($_POST["category_id"]) &&
    isset($_POST["author_ids"]) &&
    isset($_POST["description"])
) {

    $data = [
        "title"       => $_POST["title"],
        "isbn"        => $_POST["isbn"],
        "year"        => $_POST["year"],
        "stock"       => $_POST["stock"],
        "category_id" => $_POST["category_id"],
        "author_ids"  => $_POST["author_ids"],
        "description" => $_POST["description"]
    ];

    echo "<h2>Data Buku Diterima</h2>";

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    echo '<br><a href="../../pages/books/create.php">Kembali</a>';
} else {
    echo "Tidak ada data buku yang dikirim atau form belum lengkap.";
}

?>