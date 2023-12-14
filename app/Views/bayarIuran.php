<div class="main flex-main">
  <div class="card bayar-iuran">
    <h1>Bayar Iuran</h1>
    <form action="/bayar_iuran_action" method="POST">
      <input type="number" required placeholder="Jumlah yang dibayar" min="0" step="10000" name="jumlah">
      <button type="submit">Masukkan</button>
    </form>
  </div>
</div>