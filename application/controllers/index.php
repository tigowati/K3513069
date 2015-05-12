<?php if(!defined('BASEPATH'))
		exit('no direct script acess allowed');
		include('blog.php');
		
		include('hitung.php');
		
class Index extends CI_Controller{
	function __construct(){
		parent::__construct();
	
	}
	function index(){
	$this->load->view("index");
	}
	function home(){
	$this->load->view("home");
	}
	function menu($sasaran){
	$data['sasaran']=$sasaran;

	$this->load->view("index",$data);
	}
	function submenu($sasaran,$sub){
	$data['sasaran']=$sasaran;
	$data['sub']=$sub;
	$this->load->view("index",$data);

	}
	
	}


