<?php

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    echo "Kategori dengan ID " . $id . " berhasil dihapus.";
}

?>

<br><br>
<a href="../../pages/categories/index.php" class="btn btn-primary">Kembali</a>