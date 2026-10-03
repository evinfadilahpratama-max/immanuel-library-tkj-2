<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>
<body>
  <?php
  $user = [
      "id"    => 1,
      "name"  => "Budi Santoso",
      "email" => "budi.santoso@siswa.ski.sch.id",
      "role"  => "member",
  ];

  $profile = [
      "user_id" => 1,
      "phone"   => "0812-3456-7890",
      "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
      "bio"     => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri.",
  ];
  ?>

  <?php
$pageTitle = "Profil Saya";
$pageSubtitle = "Kelola informasi profil Anda";

require_once '../../repositories/user-repository.php';

$user = getUser();
$profile = getProfile();
?>

  
  <div class="app-shell">
  
<?php include '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    
    <?php include '../../components/admin/topbar.php'; ?>

      div class="app-content">
        <form method="POST" action="../../actions/profile/update.php">
       
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Akun</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Role</label>
              <input type="text" value="<?= ucfirst($user['role'] ?? 'member') ?>" disabled>
              <p class="form-help">Role hanya dapat diubah oleh Admin melalui menu Manajemen Pengguna.</p>
            </div>
          </div>

        
          <div class="form-card">
            <div class="form-section-title">Data Profil</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($profile['phone'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <textarea id="address" name="address" rows="3"><?= htmlspecialchars($profile['address'] ?? '') ?></textarea>
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($profile['bio'] ?? '') ?></textarea>
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-outline">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
