<div class="main flex-main">
  <div class="card bayar-iuran">
    <h1>Bayar Iuran</h1>
    <p>Silakan transfer ke nomor berikut:</p>
    <h3>3851253301</h3>
    <p>Jumlah yang harus dibayarkan:</p>
    <h3>Rp. <?= session()->get('biaya_iuran') ?></h3>
    <?= form_open_multipart('/bayar_iuran_action') ?>
      <div class="upload-bukti-bayar-container">
        <label for="bukti-bayar">Upload bukti pembayaran</label>
        <input type="file" name="bukti_bayar" required id='bukti-bayar' accept="image/*">
      </div>
      <button type="submit">Masukkan</button>
    </form>
  </div>
</div>