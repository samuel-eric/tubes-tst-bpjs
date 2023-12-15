<div class="main flex-main">
  <div class="card daftar-peserta">
    <h1>Daftar Peserta</h1>
    <?php if(!empty($daftar_peserta) && is_array($daftar_peserta)): ?>
      <table>
        <tr>
          <th>No Kartu</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>No. Telp</th>
        </tr>
        <?php foreach($daftar_peserta as $peserta): ?>
          <tr>
            <td>
              <?= esc($peserta['no_kartu']) ?>
            </td>
            <td>
              <?= esc($peserta['nama']) ?>
            </td>
            <td>
              <?= esc($peserta['nik']) ?>
            </td>
            <td>
              <?= esc($peserta['alamat']) ?>
            </td>
            <td>
              <?= esc($peserta['tanggal_lahir']) ?>
            </td>
            <td>
              <?= $peserta['jenis_kelamin'] == 'M' ? esc('Laki-laki') : esc('Perempuan') ?>
            </td>
            <td>
              <?= esc($peserta['no_telp']) ?>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
    <?php else: ?>
      <h3>No Data</h3>
      <p>Unable to get your data...</p>
    <?php endif ?>
  </div>

</div>