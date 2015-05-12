<?php if(!defined('BASEPATH'))
		exit('no direct script acess alliowed');
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
	
	}
	function index(){

	$this->load->view("blog/blog_view");
	}

	
	function view(){

	$data['judul']="Judul blog";
	$data['isi']="Isi blog";
	$data['tgl']="27-1-2015";
	$out=$this->load->view("blog/blog_view2",$data,true);
	echo $out;

	}}

