<?php

require_once '../../repositories/book-repository.php';
require_once '../../repositories/category-repository.php';
require_once '../../repositories/author-repository.php';

$book       = getBook();
$categories = getCategories();
$authors    = getAuthors();

$pageTitle    = "Edit Buku";
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
            
            <!-- Hidden input untuk ID buku -->
            <input type="hidden" name="id" value="<?= $book['id'] ?? '' ?>">

            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input
                type="text"
                id="title"
                name="title"
                value="<?= $book['title'] ?? '' ?>"
                required
              >
            </div>

            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input
                type="text"
                id="isbn"
                name="isbn"
                value="<?= $book['isbn'] ?? '' ?>"
                required
              >
            </div>

            <div class="form-group">
              <label for="year">Tahun Terbit</label>
              <input
                type="number"
                id="year"
                name="year"
                value="<?= $book['year'] ?? '' ?>"
                required
              >
            </div>

            <div class="form-group">
              <label for="stock">Stok</label>
              <input
                type="number"
                id="stock"
                name="stock"
                value="<?= $book['stock'] ?? '' ?>"
                required
              >
            </div>

            <div class="form-group">
              <label for="category_id">Kategori</label>
              <select name="category_id" id="category_id" required>
                <?php foreach ($categories as $category): ?>
                  <option 
                    value="<?= $category['id'] ?>"
                    <?= (isset($book['category_id']) && $category['id'] == $book['category_id']) || (isset($book['category']) && $category['name'] == $book['category']) ? 'selected' : '' ?>
                  >
                    <?= $category['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea
                id="description"
                name="description"
                rows="5"
              ><?= $book['description'] ?? '' ?></textarea>
            </div>

            <div class="form-group">
              <label>Penulis</label>
              <div class="checkbox-grid">
                <?php foreach ($authors as $author): ?>
                  <label class="checkbox-item">
                    <input 
                      type="checkbox" 
                      name="author_ids[]" 
                      value="<?= $author['id'] ?>"
                      <?= (isset($book['author_ids']) && in_array($author['id'], $book['author_ids'])) || (isset($book['authors']) && in_array($author['name'], $book['authors'])) ? 'checked' : '' ?>
                    >
                    <?= $author['name'] ?>
                  </label>
                <?php endforeach; ?>
              </div>
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