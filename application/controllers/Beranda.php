<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('posting_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['posting'] = $this->posting_model->tampil_posting()->result();
		
		$this->load->view('template/header');
		$this->load->view('menu/beranda_v',$data);
		$this->load->view('template/footer');
	}

	public function visimisi()
	{
		$this->load->view('template/header');
		$this->load->view('menu/visimisi');
		$this->load->view('template/footer');		
	}

	public function jadwal()
	{
		$this->load->view('template/header');
		$this->load->view('menu/jadwal');
		$this->load->view('template/footer');
	}

	public function galeri()
	{
		$this->load->view('template/header');
		$this->load->view('menu/galeri');
		$this->load->view('template/footer');
	}
}