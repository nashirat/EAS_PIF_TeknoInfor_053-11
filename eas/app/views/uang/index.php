<div class="container mt-5">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Tanggal</th> 
      <th scope="col">Nama</th>
      <th scope="col">Nominal</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach( $data['dnt'] as $dnt) : ?>
    <tr>
        <td><?= $dnt['tanggal']; ?></td>
        <td><?= $dnt['nama']; ?></td>
        <td><?= $dnt['nominal']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>