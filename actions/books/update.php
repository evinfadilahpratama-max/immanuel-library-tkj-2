<?php
require_once '../../repositories/author-repository.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $isbn = isset($_POST["isbn"]) ? $_POST["isbn"] : "";
    $year = isset($_POST["year"]) ? $_POST["year"] : "";
    $stock = isset($_POST["stock"]) ? $_POST["stock"] : "";
    $categoryId = isset($_POST["category_id"]) ? $_POST["category_id"] : "";
    $authorIds = isset($_POST["author_ids"]) ? $_POST["author_ids"] : [];
    $description = isset($_POST["description"]) ? $_POST["description"] : "";

    
    $authorDisplay = empty($authorIds) ? "Tidak ada penulis dipilih" : implode(", ", $authorIds);

    echo "<h1>Data Perubahan Buku Diterima</h1>";
    echo "<hr>";
    echo "<p><strong>ID Buku:</strong> " . htmlspecialchars($id) . "</p>";
    echo "<p><strong>Judul Buku:</strong> " . htmlspecialchars($title) . "</p>";
    echo "<p><strong>ISBN:</strong> " . htmlspecialchars($isbn) . "</p>";
    echo "<p><strong>Tahun Terbit:</strong> " . htmlspecialchars($year) . "</p>";
    echo "<p><strong>Jumlah Stok:</strong> " . htmlspecialchars($stock) . "</p>";
    echo "<p><strong>ID Kategori:</strong> " . htmlspecialchars($categoryId) . "</p>";
    echo "<p><strong>ID Penulis (author_ids):</strong> " . htmlspecialchars($authorDisplay) . "</p>";
    echo "<p><strong>Deskripsi:</strong> " . nl2br(htmlspecialchars($description)) . "</p>";
    echo "<hr>";

    echo '<br><a href="../../pages/books/index.php">Kembali ke Daftar Buku</a>';

} else {

    echo "<h1>Permintaan tidak valid.</h1>";
    echo '<br><a href="../../pages/books/edit.php">Kembali</a>';

}