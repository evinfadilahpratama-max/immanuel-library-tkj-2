<?php

$id = isset($_GET["id"]) ? $_GET["id"] : "";

echo "<h1>Data Buku</h1>";

echo "<p>ID buku yang akan dihapus: " . $id . "</p>";

echo "<p>Simulasi penghapusan berhasil.</p>";

echo "<a href='../../pages/books/index.php'>Kembali</a>";