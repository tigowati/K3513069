<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('table'));
		$this->load->helper(array('url','form'));
		$this->load->model('siswa_model','',TRUE);
	}
	
	function index(){
		$this->load->model('siswa_model');
		$data['hasil'] = $this->siswa_model->tampil();
		$this->load->view('utama', $data);
	}
	
	function input(){
		$this->load->view('input', true);
		$tombol = $this->input->post('tombol', true);
		
		if (!$tombol){}
		else if ($tombol){
			$this->load->model('siswa_model');
			$this->siswa_model->save();
			redirect('siswa');
		}
	}
	
	function edit_data(){
		$id = $this->uri->segment(3);
		$data['data_siswa'] = $this->siswa_model->ambil_data($id);
		$this->load->view('edit',$data);
	}
	
	function update_data(){
		$tombol = $this->input->post('tombol', true);

		if (!$tombol){}
		else if ($tombol){
			//
			$id =  $this->input->post('id', true);
			$data_input['nama'] = $this->input->post('nama', true);
			$data_input['nama'] = $this->input->post('nama', true);
			$data_input['alamat'] = $this->input->post('alamat', true);
			$data_input['jenis_kelamin'] = $this->input->post('jenis_kelamin', true);
			$tanggal_lahir = $this->input->post('tanggal_lahir', true);
			$tanggal_lahir2 = explode("/", $tanggal_lahir);
			$bulan = $tanggal_lahir2[0];
			$tanggal = $tanggal_lahir2[1];
			$tahun = $tanggal_lahir2[2];
			$tanggal_lahir3 = $tahun."-".$bulan."-".$tanggal;
			$data_input['tanggal_lahir'] = $tanggal_lahir3;
			//

			$this->load->model('siswa_model');
			$this->siswa_model->update2($id, $data_input);
			redirect('siswa');
		}
	}

	public function process()
	{
		$act = $this->input->get('act');
		$do = $this->input->get('do');
		if ($act == 'pengumuman' && $do == 'delete') 
		{
			$id = $this->input->get('id');
			if ($do)
			{
				$this->db->query("DELETE FROM siswa WHERE id = '$id'");
				redirect('siswa');
			}
		}
	}
}