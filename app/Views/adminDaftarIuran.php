<div class="main flex-main">
  <div class="card daftar-peserta">
    <h1>Daftar Iuran</h1>
    <?php if(!empty($daftar_iuran) && is_array($daftar_iuran)): ?>
      <table>
        <tr>
          <th>No Kartu Pembayar</th>
          <th>Tanggal Pembayaran</th>
          <th>Jumlah</th>
        </tr>
        <?php foreach($daftar_iuran as $iuran): ?>
          <tr>
            <td>
              <?= esc($iuran['no_kartu']) ?>
            </td>
            <td>
              <?= esc($iuran['tanggal_pembayaran']) ?>
            </td>
            <td>
              Rp. <?= esc($iuran['jumlah']) ?>
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