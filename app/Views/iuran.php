<div class="main flex-main">
  <div class="card iuran">
    <h1>Iuran</h1>
    <?php if(!empty($daftar_iuran) && is_array($daftar_iuran)): ?>
      <table>
        <tr>
          <th>ID Pembayaran</th>
          <th>Tanggal Pembayaran</th>
          <th>Jumlah</th>
        </tr>
        <?php foreach($daftar_iuran as $iuran): ?>
          <tr>
            <td>
              <?= esc($iuran['id']) ?>
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
      <p>Sepertinya Anda belum pernah membayar iuran...</p>
    <?php endif ?>
  </div>

</div>