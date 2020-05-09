<?php
//include('chklogin.php');
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('daseboard_model');
		if ($this->session->userdata('login_id') !=1) {
			redirect('dashboard');
        }
	}
	


public function index()
	{	
	$config = array();
	$config['base_url'] = base_url('admin/index');
	$config['total_rows'] = $this->admin_model->record_count($this->input->get('keyword'));
	$config['per_page'] = $this->input->get('keyword') == NULL ? 10 : 999;
	$config['uri_segment'] = 3;
	$choice = $config['total_rows'] / $config['per_page'];
	$config['num_links'] = round($choice);
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data['results'] = $this->admin_model->fetch_admin($config['per_page'], $page, $this->input->get('keyword'));
	$data['link'] = $this->pagination->create_links();
	$data['total_rows'] = $config['total_rows'];
	$this->load->view('template/menu_web');
	$this->load->view('admin/mainpage', $data);
	$this->load->view('template/backfooter');
	}
}