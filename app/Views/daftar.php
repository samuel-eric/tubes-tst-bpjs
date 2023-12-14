<div class="main flex-main">
  <div class="card daftar">
    <h1>Daftar</h1>
    <form action="/daftar_action" method="POST">
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="text" name="nik" placeholder="NIK" required>
      <input type="text" name="alamat" placeholder="Alamat" required>
      <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
      <select name="jenis_kelamin" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="M">Laki-laki</option>
        <option value="F">Perempuan</option>
      </select>
      <input type="text" name="no_telp" placeholder="Nomor Telepon" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Daftar</button>
    </form>
  </div>
</div>