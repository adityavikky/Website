<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('admin_model');
		$this->load->helper('url');
	}

	public function index()
	{
        
		$this->load->view('template_admin/header');
		$this->load->view('admin/beranda_admin_v');
		$this->load->view('template_admin/footer');
	}

	public function lihat_posting(){
		$data['posting'] = $this->admin_model->lihat_posting()->result();
		
		// var_dump($data);

		$this->load->view('template_admin/header');
		$this->load->view('admin/lihat_posting_v', $data);
		$this->load->view('template_admin/footer');

	}
	public function tambah_posting(){
		$this->load->view('template_admin/header');
		$this->load->view('admin/tambah_posting_v');
		$this->load->view('template_admin/footer');

	}

	public function insert_posting(){
		$judul = $this->input->post('judul');
		$tgl_rilis = $this->input->post('tgl_rilis');
		$gambar = $this->input->post('gambar');
		$paragraf = $this->input->post('paragraf');
		
		$data = array(
			'judul' => $judul,
			'tgl_rilis' => $tgl_rilis,
			'gambar_berita' => $gambar,
			'paragraf' => $paragraf
		);
		

		$this->Admin_model->insert_post($data, 'posting');
		redirect('admin/index');
	}

	function edit_posting($id_posting){
		$where = array('id_posting'=>$id_posting);

		$data['id_posting'] = $this->Admin_model->edit_posting($where, 'posting')->result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/edit_detail_posting_v',$data);
		$this->load->view('template_admin/footer');

	}

	function pros_edit_posting(){
		$id_posting = $this->input->post('id_posting');
		$judul = $this->input->post('judul');
		$tgl_rilis = $this->input->post('tgl_rilis');
		$gambar = $this->input->post('gambar');
		$paragraf = $this->input->post('paragraf');
		
		$data = array(
			'judul' => $judul,
			'tgl_rilis' => $tgl_rilis,
			'gambar_berita' => $gambar,
			'paragraf' => $paragraf
		);
		$where = array(
			'id_posting' => $id_posting
		);
		
		$this->Admin_model->update_posting($where, $data,'posting');
		redirect('admin/index');
	}

	function hapus_posting($id_posting){
		$where = array('id_posting' => $id_posting);
		$this->Admin_model->hapus_posting($where, 'posting');
		
		redirect('admin/lihat_posting');
	}

	function kritik_saran(){
		$data['contact'] = $this->admin_model->lihat_contact()->result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/lihat_kritik_saran', $data);
		$this->load->view('template_admin/footer');
	}

	public function insert_contact(){
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$no_telepon = $this->input->post('no_telepon');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'no_telepon' => $no_telepon,
			'email' => $email,
			'pesan' => $pesan
		);
		

		$this->Admin_model->insert_contact($data, 'kritik_saran');
		redirect('Beranda/index');
	}

	public function jadwal_dokter() {
		
		$data['jadwal_dokter'] = $this->admin_model->jadwal_dokter()->result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/jadwal_dokter', $data);
		$this->load->view('template_admin/footer');
	}
}
