<?php

if (isset($_GET["id"])) {

  $id = $_GET["id"];

  echo "Penulis dengan ID " . $id . " berhasil dihapus.";
}

?>

<br><br>
<a href="../../pages/authors/index.php" class="btn btn-primary">Kembali</a>