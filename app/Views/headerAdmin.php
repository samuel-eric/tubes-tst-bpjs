<?= $this->extend('htmlTemplate') ?>

<?= $this->section('header') ?>
  <header>
    <div class="container">
      <div>
        <img src="/logo-bpjs.svg" alt="Logo BPJS" class="logo-img">
      </div>
      <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/daftar_peserta">Daftar Peserta</a></li>
        <li><a href="/daftar_iuran">Daftar Iuran</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </header>
<?= $this->endSection() ?>