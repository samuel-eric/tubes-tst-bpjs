<div class="main container flex-main">
  <div class="home-img-container">
    <img src="/home-img.jpg" alt="Dokter" class="home-img">
  </div>
    <div class="home-text-container">
      <?php if(session()->has('nama_user')): ?>
        <h1>BPJS TST</h1>
        <h3>Halo <?= session()->get('nama_user')?></h3>
        <p>Jangan lupa membayar iuranmu!</p>
        <a href="/iuran" class="cta-btn">Bayar sekarang!</a>
      <?php elseif(session()->has('admin')): ?>
        <h1>BPJS TST</h1>
        <h3>Halo Admin</h3>
        <p>Semoga harimu menyenangkan!</p>
        <a href="/daftar_peserta" class="cta-btn">Lihat daftar peserta</a>
      <?php else: ?>
        <h1>BPJS TST</h1>
        <h3>Daftarkan diri Anda sekarang!</h3>
        <p>Pelayanan mudah, cepat, dan simpel</p>
        <a href="/daftar" class="cta-btn">Daftar sekarang!</a>
      <?php endif ?>
    </div>
</div>