<!-- flasher -->


<!-- banner -->
<div class="jumbotron big-banner" style="height: 100vh">
    <div class="container-fluid" style="width: 100vh">
        <?php Flasher::flash(); ?> 
    </div>
    <p class="lead text-center">Bantu pejuang kesehatan dan mereka yang membutuhkan dengan donasi barang dan uang anda.</p>
</div>

<div class="jumbotron second">
    <h1 class="lead bottom text-center">Apa saja yang bisa anda donasikan?</h1>
    <div class="row img justify-content-center">
        <img src="<?= BASEURL; ?>/img/med.png" class="med">
        <img src="<?= BASEURL; ?>/img/alatkesehatan.png" class="alatkesehatan">
        <img src="<?= BASEURL; ?>/img/misc.png" class="misc">
    </div>
    <h1 class="lead bottom last text-center">Segera salurkan niat baik anda dengan klik tombol dibawah ini</h1>
</div>

    <div class="jumbotron big-banner">
        <div class="row dnt justify-content-center">
            <button type="button" class="btn btn-success btn-xl donasi" data-toggle="modal" data-target="#donationModal">Donasi</button>
        </div>
    </div>
<p class="lead foot text-center">Designed by Muhammad Sulthon Nashir - 05311840000011</p> 

<!-- form -->
<div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="donationModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="donationModalCenterTitle">Donasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/barang/tambah/" method="post">

            <div class="form-group">
                <label for="nama" class="form">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Muhammad Sulthon Nashir" required='' oninvalid="this.setCustomValidity('Masukkan nama')">
                <small id="nameHelp" class="form-text text-muted">Masukkan nama anda sesuai dengan KTP atau identitas resmi lainnya</small> 
            </div>

            <div class="form-group">
                <label for="tanggal" class="form">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required>            
            </div>

            <div class="form-group">
                <label for="barang" class="form">Barang</label>
                <input type="text" name="barang" class="form-control" id="barang" placeholder="beras, mie instan, ..">
                <small id="nameHelp" class="form-text text-muted">Masukkan barang dengan kategori yang sama</small> 
          
            </div>

            <div class="form-group">
                <label for="kategori" class="form">Kategori Donasi</label>
                <select name="kategori" class="form-control" id="kategori">
                <option>Makanan</option>
                <option>Obat</option>
                <option>Pakaian</option>
                <option>Alat Kesehatan</option>
                <option>Lain-Lain</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah" class="form">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="1 Kg, 1 Dus, ..">
                        
            </div>

            <div class="form-group">
                <label for="nominal" class="form">Uang</label>
                <input type="text" name="nominal" class="form-control" id="nominal" placeholder="Rp. 1000.000,00"><small id="nameHelp" class="form-text text-muted">Kosongkan jika tidak mendonasi</small>           
            </div>

        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success btn-lg">Donasi Sekarang</button>
        </form>
      </div>
    </div>
  </div>
</div>

