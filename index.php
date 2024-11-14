<?php
include 'templates/header.php';
?>
<h1 class="display-5">Pengaduan Kerusakan Barang?</h1>
<p class="lead">Jangan ambil pusing! Sampaikan kepada kami.</p>
<form action="search.php" method="POST">
  <p class="lead" style="margin-bottom: -1px;">Cek status pengaduan Anda</p>
  <input type="text" name="keyword" class="form-control my-input" style="width: 300px; margin-bottom: 20px;" placeholder="Masukkan nomor pengaduan Anda disini">
  <button type="submit" class="btn btn-primary search-button" value="cari">
    <span class="fas fa-search mr-2"></span>Cek
  </button>
</form>
<p class="lead mt-2">atau ajukan pengaduan Anda</p>
<a href="form-pengaduan.php" class="btn btn-primary sub-button">
  <span class="fas fa-chevron-right mr-2"></span>Disini
</a>
</div>
<?php
include 'templates/footer.php';
?>