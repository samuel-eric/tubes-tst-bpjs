<div class="main flex-main">
  <div class="card bayar-iuran">
    <h1>Bayar Iuran</h1>
    <?= form_open_multipart('/bayar_iuran_action') ?>
      <input type="number" required placeholder="Jumlah yang dibayar" min="0" step="10000" name="jumlah">
      <div class="upload-bukti-bayar-container">

        <label for="bukti-bayar">Upload bukti pembayaran</label>
        <input type="file" name="bukti_bayar" required id='bukti-bayar' accept="image/*">
      </div>
      <button type="submit">Masukkan</button>
    </form>
  </div>
</div>