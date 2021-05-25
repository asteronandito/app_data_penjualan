<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" >
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/templatemo-style.css">
	  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugin/datatables/datatables.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png"/>
    <title>Data Penjualan</title>
  </head>
  <body id="reportsPage">
    <div id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <h1 class="tm-site-title mb-0">Data Penjualan</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>">
                                <i class="fas fa-tachometer-alt"></i>
                                Beranda
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
						            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>Main_Controller/laporan">
							                	<i class="far fa-file-alt"></i>
                                Laporan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</div>
<div class="content-wrapper" style="background-image: url(<?php echo base_url();?>assets/img/background.png);">
	<div class="container-fluid">
		<div class="card">
		<div class="card-header" style="background-image: url(<?php echo base_url();?>assets/img/background.png);" >
		<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-plus fa-fw"></i> Tambah</button>
		</div>
		<div class="card-body"  style="background-image: url(<?php echo base_url();?>assets/img/background.png);">
		<table class="table" id="table">
			<thead>
				<tr >
				<th scope="col" class="text-center">No.</th>
				<th scope="col" class="text-center">NAMA BARANG</th>
				<th scope="col" class="text-center">STOK</th>
				<th scope="col" class="text-center">JUMLAH TERJUAL</th>
				<th scope="col" class="text-center">TANGGAL TRANSAKSI</th>
				<th scope="col" class="text-center">JENIS BARANG</th>
				<th scope="col" class="text-center">MENU</th>
				</tr>
			</thead>
		<tbody>
		<?php 
		$i = 1;
		foreach ($hasil as $d) {
		?>	
			<tr class="text-center">
				<td scope="row" class="text-center" style="padding-right:2.5em"><?= $i++; ?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_nama']?></td>
				<td><?= $d['penjualan_stok']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_terjual']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_transaksi']?></td>
				<td><?= $d['penjualan_jenis']?></td>
				<td>
					<button class="btn-warning btn-sm fa fa-cog" data-toggle="modal" data-target="#modalEdit<?= $d['penjualan_id'] ?>"></button>
					<button class="btn-danger  btn-sm fa fa-trash" data-toggle="modal" data-target="#modalHapus<?= $d['penjualan_id'] ?>"></button>
				</td>
			</tr>
		<?php } ?>
  		</tbody>
		</table>
		</div>
		</div>
	</div>
  </div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <form action="<?php echo base_url();?>Main_Controller/tambah" method="POST" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
	  <div class="modal-header">
          <h4 class="modal-title" id="modalTambahLabel">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Barang:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_nama" required placeholder="...">
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Stok:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_stok" required placeholder="...">
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Terjual:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_terjual" required placeholder="...">
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Transaksi:</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="penjualan_transaksi" required placeholder="...">
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jenis Barang:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_jenis" required placeholder="...">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal Edit -->
<?php foreach ($hasil  as $d) { ?>
<div class="modal fade" id="modalEdit<?= $d['penjualan_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalEditlabel" aria-hidden="true">
  <form action="<?= base_url('Main_Controller/update/' . $d['penjualan_id']) ?>" method="POST" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
	  <div class="modal-header">
          <h4 class="modal-title" id="modalTambahLabel">Update Data</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Barang:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_nama" value="<?= $d['penjualan_nama'] ?>" required>
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Stok:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_stok"  value="<?= $d['penjualan_stok'] ?>" required>
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Terjual:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_terjual" value="<?= $d['penjualan_terjual'] ?>"  required>
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Transaksi:</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="penjualan_transaksi" value="<?= $d['penjualan_transaksi'] ?>" required>
            </div>
          </div>
		  <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jenis Barang:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="penjualan_jenis" value="<?= $d['penjualan_jenis'] ?>"  required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>
<?php } ?>

<!-- Modal Hapus -->
<?php foreach ($hasil as $d) { ?>
  <div class="modal fade" id="modalHapus<?= $d['penjualan_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <form action="<?= base_url('Main_Controller/hapus/' . $d['penjualan_id']) ?>" method="POST" enctype="multipart/form-data">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="modalHapus<?= $d['penjualan_id'] ?>Label">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            Anda Yakin Ingin Menghapus Data Ini ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Hapus</button>
          </div>
        </div>
      </div>
    </form>
  </div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
	$('#table').DataTable( {
		"bPaginate": false,
		"deferRender": true,
		"responsive": true,
		"columnDefs": [
		{ orderable: true, targets: 0 },
		{ orderable: false, targets: [2,3,5,6] }
			]
	} );
} );
</script>

  </body>
</html>