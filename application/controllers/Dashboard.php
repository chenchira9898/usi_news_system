<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		  $this->load->model('Dashboard_model');
		if ($this->session->userdata('login_id') == NULL) {
			redirect('user/login');
        }
	}
	


public function index()
	{	

     //print_r($_SESSION);

     $lid = $_SESSION['login_id'];

     //echo $lid;


     if($lid==2){

     	//echo 'articles';
     	redirect('articles');
     }



        $config['total_rows'] = $this->Dashboard_model->record_count();
		$data['results'] = $this->Dashboard_model->fetch_report_by_mo();
		$data['total_rows'] = $config['total_rows'];



	$this->load->view('template/backheader');
	$this->load->view('dashboard/mainpage',$data);
	$this->load->view('template/backfooter');
	}
}