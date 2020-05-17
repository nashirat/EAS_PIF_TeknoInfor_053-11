<div class="container mt-5">
  <form action="<?= BASEURL; ?>/barang/cari" method="post" name="keyword" id="keyword">
    <div class="input-group-prepend">
      <button class="btn btn-dark" type="submit" id=keyword name=keyword>Filter</button>
      <select class="custom-select" name="keyword" id="keyword">
        <option selected>Pilih Kategori</option>
        <option value="Semua">Semua</option>
        <option value="Makanan">Makanan</option>
        <option value="Obat">Obat</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Alat Kesehatan">Alat Kesehatan</option>
        <option value="Lain-lain">Lain-lain</option>
      </select>
    </div>
  </form>
</div>

<div class="container mt-5">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Barang</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach( $data['dnt'] as $dnt) : ?>
    <tr>
        <td><?= $dnt['tanggal']; ?></td>
        <td><?= $dnt['nama']; ?></td>
        <td><?= $dnt['kategori']; ?></td>
        <td><?= $dnt['barang']; ?></td>
        <td><?= $dnt['jumlah']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>