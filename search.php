<?php
include 'templates/header.php';
require 'function.php';
?>
<h1 class="display-4" style="margin-top: -50px;">Status Pengaduan Anda</h1>

<div class="row">
  <div class="col">
    <?php
    $keyword = $_POST['keyword'];
    $data = query("SELECT * FROM pengaduan WHERE id = '$keyword'");
    if ($data) {
      foreach ($data as $d):
        ?>
        <table class="table table-bordered" style="width: auto;">
          <tr>
            <th>Nomor Pengaduan</th>
            <td><?= $d['id']; ?></td>
          </tr>
          <tr>
            <th>Tanggal Pengaduan</th>
            <td><?= $d['tgl_lapor']; ?></td>
          </tr>
          <tr>
            <th>Nama Pelapor</th>
            <td><?= $d['n_pelapor']; ?></td>
          </tr>
          <tr>
            <th>Jabatan</th>
            <td><?= $d['j_pelapor']; ?></td>
          </tr>
          <tr>
            <th>Departemen</th>
            <td><?= $d['d_pelapor']; ?></td>
          </tr>
          <tr>
            <th>Nama Barang</th>
            <td><?= $d['n_barang']; ?></td>
          </tr>
          <tr>
            <th>Keterangan</th>
            <td><?= $d['ket']; ?></td>
          </tr>
          <tr>
            <th>Status</th>
            <td><?= $d['status']; ?></td>
          </tr>
        </table>
        <div style="border: 1px solid #000; padding: 10px; margin-top: 10px; width: 300px;">
          <p><b><u>Catatan dari petugas</u></b></p>
          <p><?= $d['ket_petugas']; ?></p>
        </div>
        <br>
        <a href="index.php" class="btn btn-sm btn-primary" style="width: 80px;"><span
            class="fas fa-arrow-left mr-2"></span>Back</a>
        <?php
      endforeach;
    } else {
      echo "<p>Data pengaduan tidak ditemukan.</p>";
    }
    ?>
  </div>
</div>
<?php
include 'templates/footer.php';
?>
