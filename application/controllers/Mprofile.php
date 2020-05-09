<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mprofile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('pagination');
		$this->load->model('member_model');
		if ($this->session->userdata('login_id') == NULL) {
			redirect('user/login');
        }
	}
	


public function index()
	{	

    $mid = $_SESSION['login_id'];
    $p_id = $_SESSION['login_id'];


	$data['result'] = $this->member_model->read_member($p_id);


	$this->load->view('template/backheader'); 
	$this->load->view('mprofile/mainpage',$data);
	$this->load->view('template/backfooter');
	} 


	public function pwd()
	{
	$p_id = $_SESSION['login_id'];
	$data['result'] = $this->member_model->read_member($p_id);

	$this->load->view('template/backheader');
	$this->load->view('mprofile/mepwd',$data);
	$this->load->view('template/backfooter');
	}
}