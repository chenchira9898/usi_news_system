<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login()
	{

		

		if($this->input->post('username')==''){
			$this->load->view('user/login');
		}else{
		

			$result = $this->User_model->fetch_user_login($this->input->post('username'), $this->input->post('password'));

			

			if(!empty($result)){
			

				$sess=array(
					'login_id'    => $result->p_id,
					'logi_acc'    => $result->p_level,
					'username'    => $result->username,
					'display_name'=> $result->p_name,
					'display_img'=> $result->p_img
				);
				
				$this->session->set_userdata($sess);

				redirect('dashboard');


			}else{
				$this->session->set_flashdata('login_error', TRUE);
				redirect('user/login');
			}
		}
	}



	public function logout()
	{
		$this->session->unset_userdata(array('login_id','username','display_name', 'logi_acc', 'display_img'));
		redirect('home','refresh');
				// echo "<script type='text/javascript'>";
				// echo "window.location='../';";
				// echo "</script>";
		//redirect('', 'refresh');
	}

	public function profile()
	{
		$data['result'] = $this->User_model->read_user($this->session->userdata('login_id'));
		$this->load->view('user/profile',$data);
	}

	public function postprofile()
	{
		if($this->input->server('REQUEST_METHOD') == TRUE)
		{
			$this->form_validation->set_rules('display_name', 'ชื่อแสดง', 'required', array('required'=> 'ค่าห้ามว่าง!'));
			if($this->User_model->record_count($this->input->post('username'),$this->input->post('password')) == 1 && $this->form_validation->run() == TRUE){
				$this->User_model->entry_user($this->session->userdata('login_id'));
				$this->session->set_userdata(array('display_name'=>$this->input->post('display_name')));
				redirect('member','refresh');  //ให้วิ่งไปหน้านีหน้าแรก สำหรับ admin 
			}else{
				redirect('user/profile','refresh');
			}
		}

	}
}
