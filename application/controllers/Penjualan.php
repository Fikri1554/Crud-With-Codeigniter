<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	// public function index()
	// {
	// 	$data['dataBuku']=$this->MSudi->GetData('tbl_buku');
	// 	$this->load->view('VMain',$data);
	// }

	// public function SearchBuku()
	// {
	// 	$title = $this->input->post('title');

	// 	$data['dataBuku']=$this->MSudi->GetDataWhereBook($title);
	// 	$this->load->view('VMain',$data);
	// }

	// public function AddDataTamu()
	// {
	// 	 $add['nama']=$this->input->post('nama');
 //         $add['tanggal']= $this->input->post('tanggal');
 //         $add['keterangan']= $this->input->post('keterangan');  
 //         $this->MSudi->AddData('tbl_tamu',$add);
 //         $this->session->set_flashdata('nama',$this->input->post('nama'));
 //         redirect(site_url('Welcome'));
	// }

	// public function Beranda()
	// {
	// 	if($this->session->userdata('Login'))
	// 	{
	// 		$data['content']='VBlank';
	// 		$this->load->view('welcome_message',$data);
	// 	}
	// 	else
	// 	{
	// 		 redirect(site_url('Login'));
	// 	}
	// }

	// crud Barang
	public function DataBarang()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_Barang','kd_barang',$nis)->row();
				$data['detail']['kd_barang']= $tampil->kd_barang;
	            $data['detail']['kd_jns']= $tampil->kd_jns;
	            $data['detail']['nama']= $tampil->nama;
	            $data['detail']['harga']= $tampil->harga;
	            $data['detail']['jumlah']= $tampil->jumlah;
	            $data['detail']['tgl_masuk']= $tampil->tgl_masuk;
	        $data['DataJns']=$this->MSudi->GetData('tbl_jnsbarang');
			$data['content']='Barang/VFormUpdateBarang';
		}
		else
		{	
			$data['DataBarang']=$this->MSudi->GetDataRelation2bj();
			$data['content']='Barang/VBarang';
		}


		$this->load->view('welcome_message',$data);
	}

	public function VFormAddBarang()
	{
		$data['DataJns']=$this->MSudi->GetData('tbl_jnsbarang');
		$data['content']='Barang/VFormAddBarang';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataBarang()
	{
		
		$add['kd_jns']=$this->input->post('kd_jns');
        $add['nama']= $this->input->post('nama');
        $add['harga']= $this->input->post('harga'); 
        $add['jumlah']= $this->input->post('jumlah');
        $add['tgl_masuk']= $this->input->post('tgl_masuk');  
       	$this->MSudi->AddData('tbl_Barang',$add);
        redirect(site_url('Penjualan/DataBarang'));
	}

	public function UpdateDataBarang()
	{
		$nis=$this->input->post('kd_barang');
		$update['kd_jns']= $this->input->post('kd_jns');
        $update['nama']= $this->input->post('nama');
        $update['harga']= $this->input->post('harga');
        $update['jumlah']= $this->input->post('jumlah');
        $update['tgl_masuk']= $this->input->post('tgl_masuk');
        $this->MSudi->UpdateData('tbl_Barang','kd_barang',$nis,$update);
		redirect(site_url('Penjualan/DataBarang'));
	}

	public function DeleteDataBarang()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tbl_Barang','kd_barang',$nis);
       	redirect(site_url('Penjualan/DataBarang'));
	}
	//crud Barang

	// crud JnsBarang
	public function DataJnsBarang()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_jnsbarang','kd_jns',$nis)->row();
				$data['detail']['kd_jns']= $tampil->kd_jns;
	            $data['detail']['nama']= $tampil->nama;
			$data['content']='JnsBarang/VFormUpdateJnsBarang';
		}
		else
		{	
			$data['DataJnsBarang']=$this->MSudi->GetData('tbl_jnsbarang');
			$data['content']='JnsBarang/VJnsBarang';
		}


		$this->load->view('welcome_message',$data);
	}

	public function VFormAddJnsBarang()
	{
		$data['content']='JnsBarang/VFormAddJnsBarang';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataJnsBarang()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='JnsBarang/VFormAddJnsBarang';
			$this->load->view('welcome_message',$data);
		}
		else
		{
			$add['nama']=$this->input->post('nama');
			$this->MSudi->AddData('tbl_jnsbarang',$add);
		 	redirect(site_url('Penjualan/DataJnsBarang'));
		}
		
	}

	public function UpdateDataJnsBarang()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Penjualan/DataJnsBarang'));
		}
		else
		{
			$nis=$this->input->post('kd_jns');
			$update['nama']= $this->input->post('nama');
			$this->MSudi->UpdateData('tbl_jnsbarang','kd_jns',$nis,$update);
			redirect(site_url('Penjualan/DataJnsBarang'));
		}
	}


	public function DeleteDataJnsBarang()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tbl_jnsbarang','kd_jns',$nis);
       	redirect(site_url('Penjualan/DataJnsBarang'));
	}
	//crud JnsBarang

public function SpamJnsBarang()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tb_spam','id',$nis)->row();
			$data['detail']['id']= $tampil->id;
				$data['detail']['kd_jns']= $tampil->kd_jns;
	            $data['detail']['nama']= $tampil->nama;
			$data['content']='JnsBarang/RestoreJnsBarang';
		}
		else
		{	
			$data['SpamJnsBarang']=$this->MSudi->GetData('tb_spam');
			$data['content']='JnsBarang/Vspam_barang';
		}


		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataJnsBarang()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Penjualan/DataJnsBarang'));
		}
		else
		{
			$nis=$this->input->post('id');
			$update['nama']= $this->input->post('nama');
			$update['status']= $this->input->post('status');
			$this->MSudi->UpdateData('tb_spam','id',$nis,$update);
			redirect(site_url('Penjualan/SpamJnsBarang'));
		}
}

	public function DeleteSpamJnsBarang()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tb_spam','id',$nis);
       	redirect(site_url('Penjualan/SpamJnsBarang'));
	}
	public function DataSpamPembelian()
	{
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tb_spam_pembelian','id',$nis)->row();
				$data['detail']['id']= $tampil->id;
				$data['detail']['kd_pembelian']= $tampil->kd_pembelian;
	            $data['detail']['struk']= $tampil->struk;
	            $data['detail']['kd_barang']= $tampil->kd_barang;
	            $data['detail']['jml_beli']= $tampil->jml_beli;


			$data['content']='Pembelian/VRestorePembelian';
		}
		else
		{	
			 
	            $data['DataSpamPembelian']=$this->MSudi->GetData('tb_spam_pembelian');
			$data['content']='Pembelian/VspamPembelian';
		}


		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataSpamPembelian()
	{
		$nis=$this->input->post('id');
		$update['struk']= $this->input->post('struk');
        $update['kd_barang']= $this->input->post('kd_barang');
        $update['jml_beli']= $this->input->post('jml_beli');
        $update['status']= $this->input->post('status');
        $this->MSudi->UpdateData('tb_spam_pembelian','id',$nis,$update);
		redirect(site_url('Penjualan/DataSpamPembelian'));
	}


	public function DeleteDataSpamPembelian()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tb_spam_pembelian','id',$nis);
       	redirect(site_url('Penjualan/DataSpamPembelian'));
	}


	// crud Pembelian
	public function DataPembelian()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pembelian','kd_pembelian',$nis)->row();
				$data['detail']['kd_pembelian']= $tampil->kd_pembelian;
	            $data['detail']['struk']= $tampil->struk;
	            $data['detail']['kd_barang']= $tampil->kd_barang;
	            $data['detail']['jml_beli']= $tampil->jml_beli;
	            $data['detail']['tgl_beli']= $tampil->tgl_beli;
	            $data['DataBarang']=$this->MSudi->GetData('tbl_barang');
			$data['content']='Pembelian/VFormUpdatePembelian';
		}
		else
		{	
			$data['DataPembelian']=$this->MSudi->GetDataRelation2pb();
			$data['content']='Pembelian/VPembelian';
		}


		$this->load->view('welcome_message',$data);
	}

	public function VFormAddPembelian()
	{

		$data['DataBarang']=$this->MSudi->GetData('tbl_barang');
		$data['content']='Pembelian/VFormAddPembelian';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataPembelian()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('struk', 'struknya', 'required');

		$this->form_validation->set_rules('jml_beli', 'jumlah beli', 'required');

		$this->form_validation->set_rules('tgl_beli', 'tanggal beli', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Pembelian/VFormAddPembelian';
			$this->load->view('welcome_message',$data);
		}
		else
		{
				$add['struk']=$this->input->post('struk');
        $add['kd_barang']= $this->input->post('kd_barang');
        $add['jml_beli']= $this->input->post('jml_beli');
        $add['tgl_beli']= $this->input->post('tgl_beli'); 
       	$this->MSudi->AddData('tbl_Pembelian',$add);
        redirect(site_url('Penjualan/DataPembelian'));
		}
		
	}

	public function UpdateDataPembelian()
	{
		$nis=$this->input->post('kd_pembelian');
		$update['struk']= $this->input->post('struk');
        $update['kd_barang']= $this->input->post('kd_barang');
        $update['jml_beli']= $this->input->post('jml_beli');
        $update['tgl_beli']= $this->input->post('tgl_beli');
        $this->MSudi->UpdateData('tbl_Pembelian','kd_pembelian',$nis,$update);
		redirect(site_url('Penjualan/DataPembelian'));
	}


	public function DeleteDataPembelian()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('tbl_Pembelian','kd_pembelian',$nis);
       	redirect(site_url('Penjualan/DataPembelian'));
	}
	//crud Pembelian
	//Rekap Barang masuk
	public function RekapBarang()
	{
		if($this->input->post('tglawal')){
			$tglawal =$this->input->post('tglawal');
	        $tglakhir = $this->input->post('tglakhir');	
			$data['DataBarang']=$this->MSudi->GetDataRelation2bjrange($tglawal,$tglakhir);
		}else{
			$data['DataBarang']=$this->MSudi->GetDataRelation2bj();
		}
		
		$data['content']='VRekapBarangMasuk';
		$this->load->view('welcome_message',$data);
	}
	//Rekap Pembelian
	public function RekapPembelian()
	{
		if($this->input->post('tglawal')){
			$tglawal =$this->input->post('tglawal');
	        $tglakhir = $this->input->post('tglakhir');	
			$data['DataPembelian']=$this->MSudi->GetDataRelation2pbrange($tglawal,$tglakhir);
		}else{
			$data['DataPembelian']=$this->MSudi->GetDataRelation2pb();
		}
		$data['content']='VRekapPembelian';
		$this->load->view('welcome_message',$data);
	}

	// public function Logout()
	// {
	// 	$this->load->library('session');
	// 	$this->session->unset_userdata('Login');
	// 	$this->session->unset_userdata('akses');
 	//  $this->session->unset_userdata('ses_id');
 	//  $this->session->unset_userdata('ses_name');
	// 	redirect(site_url('Welcome'));
	// }

}