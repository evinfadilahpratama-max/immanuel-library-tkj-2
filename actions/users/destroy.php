<?php

$id = isset($_GET["id"]) ? $_GET["id"] : "";

echo "<h1>Data Pengguna</h1>";

echo "<p>ID pengguna yang akan dihapus: " . $id . "</p>";

echo "<p>Simulasi penghapusan berhasil.</p>";

echo "<a href='../../pages/users/index.php'>Kembali</a>";