<?php

$title = $_POST['title'];
$isbn = $_POST['isbn'];
$year = $_POST['year'];
$stock = $_POST['stock'];
$category = $_POST['category'];
$description = $_POST['description'];
$authors = $_POST['authors'];

echo "Data buku berhasil diterima:";
echo "<pre>";

print_r([
    "title" => $title,
    "isbn" => $isbn,
    "year" => $year,
    "stock" => $stock,
    "category" => $category,
    "description" => $description,
    "authors" => $authors
]);

echo "</pre>";