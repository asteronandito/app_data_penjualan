<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" >
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/templatemo-style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugin/datatables/datatables.min.css">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png"/>
    <title>Laporan Data Penjualan</title>
  </head>
  <body id="reportsPage">
    <div id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?php echo base_url()?>Main_Controller/laporan">
                    <h1 class="tm-site-title mb-0">Laporan Data Penjualan</h1>
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
		<div class="card-body"  style="background-image: url(<?php echo base_url();?>assets/img/background.png);">
        <h3 class="tm-site-titles mb-0"> Penjualan Jenis Barang Konsumsi</h3>
		<table class="table" id="table" style="width: 100%;">
			<thead>
				<tr>
				<th scope="col" class="text-center">No.</th>
				<th scope="col" class="text-center">NAMA BARANG</th>
				<th scope="col" class="text-center">STOK</th>
				<th scope="col" class="text-center">JUMLAH TERJUAL</th>
				<th scope="col" class="text-center">TANGGAL TRANSAKSI</th>
				<th scope="col" class="text-center">JENIS BARANG</th>
				</tr>
			</thead>
		<tbody>
		<?php 
		$i = 1;
		foreach ($hasil->result_array() as $d) {
		?>	
			<tr class="text-center">
				<td scope="row" class="text-center" style="padding-right:2.5em"><?= $i++; ?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_nama']?></td>
				<td><?= $d['penjualan_stok']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_terjual']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_transaksi']?></td>
				<td><?= $d['penjualan_jenis']?></td>
			</tr>
		<?php } ?>
        <?php 
		$i = 2;
		foreach ($hasil2->result_array() as $d) {
		?>	
			<tr class="text-center">
				<td scope="row" class="text-center" style="padding-right:2.5em"><?= $i++; ?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_nama']?></td>
				<td><?= $d['penjualan_stok']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_terjual']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_transaksi']?></td>
				<td><?= $d['penjualan_jenis']?></td>
			</tr>
		<?php } ?>
  		</tbody>
		</table>
        <h3 class="tm-site-titles mb-0">Penjualan Jenis Barang Pembersih</h3>
		<table class="table" id="table2" style="width: 100%;">
			<thead>
				<tr>
				<th scope="col" class="text-center">No.</th>
				<th scope="col" class="text-center">NAMA BARANG</th>
				<th scope="col" class="text-center">STOK</th>
				<th scope="col" class="text-center">JUMLAH TERJUAL</th>
				<th scope="col" class="text-center">TANGGAL TRANSAKSI</th>
				<th scope="col" class="text-center">JENIS BARANG</th> -->
				</tr>
			</thead>
		<tbody>
		<?php 
		$i = 1;
		foreach ($hasil3->result_array() as $d) {
		?>	
			<tr class="text-center">
				<td scope="row" class="text-center" style="padding-right:2.5em"><?= $i++; ?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_nama']?></td>
				<td><?= $d['penjualan_stok']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_terjual']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_transaksi']?></td>
				<td><?= $d['penjualan_jenis']?></td>
			</tr>
		<?php } ?>
        <?php 
		$i = 2;
		foreach ($hasil4->result_array() as $d) {
		?>	
			<tr class="text-center">
				<td scope="row" class="text-center" style="padding-right:2.5em"><?= $i++; ?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_nama']?></td>
				<td><?= $d['penjualan_stok']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_terjual']?></td>
				<td style="padding-right:2.5em"><?= $d['penjualan_transaksi']?></td>
				<td><?= $d['penjualan_jenis']?></td>
			</tr>
		<?php } ?>
  		</tbody>
		</table>
        <h4 class="tm-site-p">KETERANGAN:</h4>
        <p class="tm-site-p"> No.1 = Penjualan Terbanyak <br> No.2 = Penjualan Terendah </p>
		</div>
		</div>
	</div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
	$('#table').DataTable( {
        // "searching": false,
		"bPaginate": false,
        "info": false,
		"deferRender": true,
		"responsive": true,
		"columnDefs": [
		{ orderable: true, targets: 0 },
		{ orderable: false, targets: [2,3,5] }
		]
	} );
} );
$(document).ready(function() {
	$('#table2').DataTable( {
        // "searching": false,
		"bPaginate": false,
        "info": false,
		"deferRender": true,
		"responsive": true,
		"columnDefs": [
		{ orderable: true, targets: 0 },
		{ orderable: false, targets: [2,3,5] }
		]
	} );
} );
</script>
  </body>
</html>