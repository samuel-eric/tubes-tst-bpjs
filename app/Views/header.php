<?= $this->extend('htmlTemplate') ?>

<?= $this->section('header') ?>
  <header>
    <div>
      <img src="/logo-bpjs.svg" alt="Logo BPJS" class="logo-img">
    </div>
    <ul class="links">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
    </ul>
  </header>
<?= $this->endSection() ?>