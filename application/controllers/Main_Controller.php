<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
   		$this->load->model('M_cud');
		$this->session->keep_flashdata('msg');
  	}
	
	public function index()
	{
		$this->data['hasil'] = $this->M_data->get('tb_penjualan'); 
		$this->load->view('v_index', $this->data);
	}

	public function laporan()
	{	
		$this->data['hasil']  = $this->M_data->getMaxKonsumsi();
		$this->data['hasil2'] = $this->M_data->getMinKonsumsi();
		$this->data['hasil3'] = $this->M_data->getMaxPembersih();
		$this->data['hasil4'] = $this->M_data->getMinPembersih();
		$this->load->view('v_laporan', $this->data);
	}

	public function tambah()
  	{
    $data = array(
      'penjualan_nama'   	  => $this->input->post('penjualan_nama'),
      'penjualan_stok'        => $this->input->post('penjualan_stok'),
      'penjualan_terjual'  	  => $this->input->post('penjualan_terjual'),
      'penjualan_transaksi'   => $this->input->post('penjualan_transaksi'),
	  'penjualan_jenis'       => $this->input->post('penjualan_jenis'),
    );
    if ($this->M_cud->simpan('tb_penjualan', $data) > 0) {
      $this->session->set_flashdata(
        'msg',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil Di Tambah</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
    } else {
      $this->session->set_flashdata(
        'msg',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Gagal</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
    }
    redirect('');
  	}

	public function update($keyId)
	{
	$data = array(
	  'penjualan_nama'   	  => $this->input->post('penjualan_nama'),
      'penjualan_stok'        => $this->input->post('penjualan_stok'),
      'penjualan_terjual'  	  => $this->input->post('penjualan_terjual'),
      'penjualan_transaksi'   => $this->input->post('penjualan_transaksi'),
	  'penjualan_jenis'       => $this->input->post('penjualan_jenis'),
	);
	if ($this->M_cud->update('tb_penjualan', $data, 'penjualan_id', $keyId) > 0) {
		$this->session->set_flashdata(
		'msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Berhasil Update Data</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>'
		);
	} else {
		$this->session->set_flashdata(
		'msg',
		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Gagal</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>'
		);
	}
	redirect('/');
	}

	public function hapus($keyId)
  	{
    if ($this->M_cud->hapus('tb_penjualan', 'penjualan_id', $keyId) > 0) {
			$this->session->set_flashdata(
			'msg',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
    } else {
      $this->session->set_flashdata(
			'msg',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Gagal</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>'
      );
    }
    redirect('');
  	}

}
