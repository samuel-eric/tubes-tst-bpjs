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
        <li><a href="/daftar">Daftar</a></li>
        <li><a href="/login">Login Peserta BPJS</a></li>
        <li><a href="/login_admin">Login Admin</a></li>
      </ul>
    </div>
  </header>
<?= $this->endSection() ?>