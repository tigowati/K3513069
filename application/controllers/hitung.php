<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Hitung extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->helper(array('url','form'));
	}
	
	function index(){
		$this->load->view('hitung/menu_hitung');
	}
	function perkalian(){
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		$data['r1']=(int)$this->input->post('r1',true);
		$data['c1']=(int)$this->input->post('c1',true);
		$data['p1']=(int)$this->input->post('p1',true);
		$data['t1']=(int)$this->input->post('t1',true);
		$data['submit']=$this->input->post('submit',true);
		$data['hasil']=$data['v1']*$data['v2'];

		$this->load->view('hitung/perkalian',$data);
	}
	
	function pembagian(){
		$data['v1']=(int)$this->input->post('v1',true); 
		$data['v2']=(int)$this->input->post('v2',true);
		$data['submit']=$this->input->post('submit',true);
		if ($data['v2']>0)
		$data['hasil']=$data['v1']/$data['v2'];
		else
		$data['hasil']='Error, v2 tidak boleh 0!';
		$this->load->view('hitung/pembagian',$data);
	}
}