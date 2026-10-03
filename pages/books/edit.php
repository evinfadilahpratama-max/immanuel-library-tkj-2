<?php

require_once '../../repositories/book-repository.php';

$book = getBook();

$pageTitle = "Edit Buku";
$pageSubtitle = "Ubah informasi buku";

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit Buku - Perpustakaan Digital</title>

  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>

<body>


  <div class="app-shell">

    <?php include '../../components/admin/sidebar.php'; ?>

    <main class="app-main">

      <?php include '../../components/admin/topbar.php'; ?>

      <div class="app-content">

        <div class="form-card">
          <form method="POST" action="../../actions/books/update.php">
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input
                type="text"
                id="title"
                name="title"
                value="<?= $book['title'] ?>"
              >
            </div>
            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input
                type="text"
                id="isbn"
                name="isbn"
                value="<?= $book['isbn'] ?>"
              >
            </div>
            <div class="form-group">
              <label for="year">Tahun Terbit</label>
              <input
                type="number"
                id="year"
                name="year"
                value="<?= $book['year'] ?>"
              >
            </div>
            <div class="form-group">
              <label for="stock">Stok</label>
              <input
                type="number"
                id="stock"
                name="stock"
                value="<?= $book['stock'] ?>"
              >
            </div>
            <div class="form-group">
              <label for="category">Kategori</label>
              <input
                type="text"
                id="category"
                name="category"
                value="<?= $book['category'] ?>"
              >
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea
                id="description"
                name="description"
                rows="5"
              ><?= $book['description'] ?></textarea>
            </div>


            

            <div class="form-group">
              <label>Penulis</label>
              <?php foreach ($book['authors'] as $author): ?>
                <div>
                  <input
                    type="text"
                    name="authors[]"
                    value="<?= $author ?>"
                  >
                </div>
              <?php endforeach; ?>
            </div>
           
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">
                Batal
              </a>
              <button type="submit" class="btn btn-primary">
                Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
