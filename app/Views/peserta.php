<div class="main container flex-main">
  <div class="card">
    <h1>Data</h1>
    <div class="data-peserta-container">
      <div class="data-peserta-item">
        <h4>Nomor Kartu</h4>
        <p><?= $peserta['no_kartu'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>Kelas</h4>
        <p><?= $peserta['kelas'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>Nama</h4>
        <p><?= $peserta['nama'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>NIK</h4>
        <p><?= $peserta['nik'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>Alamat</h4>
        <p><?= $peserta['alamat'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>Tanggal Lahir</h4>
        <p><?= $peserta['tanggal_lahir'] ?></p>
      </div>
      <div class="data-peserta-item">
        <h4>Jenis Kelamin</h4>
        <?php if($peserta['jenis_kelamin'] == 'F'): ?>
          <p>Perempuan</p>
        <?php else: ?>
          <p>Laki-laki</p>
        <?php endif ?>
      </div>
      <div class="data-peserta-item">
        <h4>Nomor Telepon</h4>
        <p><?= $peserta['no_telp'] ?></p>
      </div>
    </div>
  </div>
</div>