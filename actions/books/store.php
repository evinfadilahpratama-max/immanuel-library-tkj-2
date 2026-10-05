<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = isset($_POST["title"]) ? trim($_POST["title"]) : "";
    $isbn = isset($_POST["isbn"]) ? trim($_POST["isbn"]) : "";
    $year = isset($_POST["year"]) ? $_POST["year"] : "";
    $stock = isset($_POST["stock"]) ? $_POST["stock"] : "";
    $categoryId = isset($_POST["category_id"]) ? $_POST["category_id"] : "";
    $authorIds = isset($_POST["author_ids"]) ? $_POST["author_ids"] : [];
    $description = isset($_POST["description"]) ? trim($_POST["description"]) : "";

    echo "<h1>Data Buku Berhasil Diterima</h1>";
    echo "<hr>";
    echo "<p><strong>Judul Buku:</strong> " . htmlspecialchars($title) . "</p>";
    echo "<p><strong>ISBN:</strong> " . htmlspecialchars($isbn) . "</p>";
    echo "<p><strong>Tahun Terbit:</strong> " . htmlspecialchars($year) . "</p>";
    echo "<p><strong>Jumlah Stok:</strong> " . htmlspecialchars($stock) . "</p>";
    echo "<p><strong>ID Kategori:</strong> " . htmlspecialchars($categoryId) . "</p>";
    echo "<p><strong>ID Penulis (author_ids):</strong> " . (empty($authorIds) ? "Tidak ada penulis dipilih" : implode(", ", $authorIds)) . "</p>";
    echo "<p><strong>Deskripsi:</strong> " . nl2br(htmlspecialchars($description)) . "</p>";
    echo "<hr>";

    echo '<br><a href="../../pages/books/create.php">Kembali</a>';

} else {
    echo "<h1>Permintaan tidak valid.</h1>";
    echo '<br><a href="../../pages/books/create.php">Kembali</a>';
}