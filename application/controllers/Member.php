<?php
//include('chklogin.php');
defined('BASEPATH') or exit('No direct script access allowed');
class member extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		if ($this->session->userdata('login_id') == NULL) {
			redirect('user/login');
		}
	}

	//member
	public function index()
	{

		if ($this->session->userdata('login_id') != 1) {
			redirect('dashboard');
		}

		//    print_r($_SESSION);


		$data['results'] = $this->member_model->fetch_member(0, 0, '');
		//	echo '<pre>';
		//    print_r($data);
		//   echo '<pre>';
		//   exit;
		$this->load->view('template/backheader');
		$this->load->view('member/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$data['rslevel'] = $this->member_model->fetch_m_level(0, 0, '');

		//	echo '<pre>';
		//   print_r($data);
		//   echo '<pre>';
		//  exit();



		$this->load->view('template/backheader');
		$this->load->view('member/newdata', $data);
		$this->load->view('template/backfooter');
	}

	public function adding($value = '')
	{

		
		$config['upload_path'] = './pimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		//$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า 
		$this->upload->do_upload('p_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ p_img
		$this->load->library('upload', $config);
		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้
		if ($this->upload->display_errors()) { 
			redirect('member?act=done', 'refresh');
		} else {   // หากไม่มีข้อผิดพลาดใดๆ เกิดข้อ ก็บันทึกข้อมูลส่วนอื่นตามปกติ             	   
			$arr = array(
				'p_level' => $this->input->post('p_level'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'p_name' => $this->input->post('p_name'),
				'p_email' => $this->input->post('p_email'),
				'p_phone' => $this->input->post('p_phone'),
				'p_img' => $filename
			);
			$this->db->insert('tbl_personnel', $arr);
			redirect('member?act=done', 'refresh');
		}
	}




	public function edit($p_id)
	{
		$data['rslevel'] = $this->member_model->fetch_m_level(0, 0, '');
		$data['result'] = $this->member_model->read_member($p_id);
	
		$this->load->view('template/backheader');
		$this->load->view('member/edit', $data);
		$this->load->view('template/backfooter');  
	}
 


	public function update($value = '')
	{


		$config['upload_path'] = './pimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$config['encrypt_name'] = TRUE;


		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('p_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
		$this->load->library('upload', $config);

		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่  
		if ($this->upload->display_errors())  
		{                    
		 	$arr1=array(
				'p_level' => $this->input->post('p_level'),
				'p_name' => $this->input->post('p_name'),
				'p_email' => $this->input->post('p_email'),
				'p_phone' => $this->input->post('p_phone')
			);
			$this->db->where('p_id', $this->input->post('p_id'));
			$this->db->update('tbl_personnel', $arr1);
			redirect('member?act=update', 'refresh');

		}else{

			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = $this->upload->data();
				$this->load->library('image_lib');
				$config2 = array(
					"image_library" =>"gd2",
					"source_image"=>"./pimg/".$data['file_name'],
					"create_thumb"=>FALSE,
					"maintain_ratio"=>TRUE,
					"width"=>700,
					"heigth"=>700
				);
				$this->image_lib->initialize($config2);

				$filename = $data['file_name'];
				if(!$this->image_lib->resize()){
					echo $this->image_lib->display_errors();
				}else{
					echo $this->upload->display_errors();
				}

				$arr=array(
					'p_level' => $this->input->post('p_level'),
					'p_name' => $this->input->post('p_name'),
					'p_email' => $this->input->post('p_email'),
					'p_phone' => $this->input->post('p_phone'),
					'p_img'=> $filename
				);
				$this->db->where('p_id', $this->input->post('p_id'));
				$this->db->update('tbl_personnel', $arr);
				redirect('member?act=update', 'refresh');

			}
		}


	public function update_member($value = '')
	{


		$config['upload_path'] = './pimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('p_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
		$this->load->library('upload', $config);
		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่  
        if ($this->upload->display_errors())  
                { 
					$arr1=array(
						'p_name' => $this->input->post('p_name'),
						'p_email' => $this->input->post('p_email'),
						'p_phone' => $this->input->post('p_phone')
					);
					$this->db->where('p_id', $this->input->post('p_id'));
					$this->db->update('tbl_personnel', $arr1);
					redirect('mprofile?act=update', 'refresh');
				}else{
					$data = $this->upload->data();
                	$filename = $data['file_name'];
                	$data = $this->upload->data();
					$this->load->library('image_lib');
					$config2 = array(

						"image_library" =>"gd2",
						"source_image"=>"./pimg/".$data['file_name'],
						"create_thumb"=>FALSE,
						"maintain_ratio"=>TRUE,
						"width"=>700,
						"heigth"=>700
					);
					$this->image_lib->initialize($config2);
					$filename = $data['file_name'];
					if(!$this->image_lib->resize()){
						echo $this->image_lib->display_errors();
					}else{
						echo $this->upload->display_errors();
					}
					$arr1=array(
						'p_name' => $this->input->post('p_name'),
						'p_email' => $this->input->post('p_email'),
						'p_phone' => $this->input->post('p_phone'),
						'p_img'=> $filename
					);
					$this->db->where('p_id', $this->input->post('p_id'));
					$this->db->update('tbl_personnel', $arr1);
					redirect('user/login', 'refresh');
				}
			}


	public function update_member_pwd($value = '')
	{


		$pwd1 = $this->input->post('pwd1');
		$pwd2 = $this->input->post('pwd2');



		if ($pwd1 == $pwd2) {
			$arr = array(
				'password' => md5($this->input->post('pwd1'))
			);
			$this->db->where('p_id', $this->input->post('p_id'));
			$this->db->update('tbl_personnel', $arr);
			redirect('mprofile/pwd?act=update', 'refresh');
		} else {
			echo "<script type='text/javascript'>";
			echo "alert('Password Not Match!!');";
			echo "window.location='../mprofile/pwd';";
			echo "</script>";
		}
	}




	public function confrm($p_id)
	{
		$data = array(
			'backlink'  => 'member',
			'deletelink' => 'member/remove/' . $p_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm', $data);
		$this->load->view('template/backfooter');
	}

	public function remove($p_id)
	{
		$this->member_model->remove_member($p_id);
		redirect('member', 'refresh');
	}




	//level. m_level

	public function m_level()
	{
		if ($this->session->userdata('login_id') != 1) {
			redirect('dashboard');
		}

		$data['results'] = $this->member_model->fetch_m_level(0, 0, '');
		//	echo '<pre>';
		//   print_r($data);
		//   echo '<pre>';
		//   exit;

		$this->load->view('template/backheader');
		$this->load->view('member/mainpage_m_level', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata_m_level()
	{
		$this->load->view('template/backheader');
		$this->load->view('member/newdata_m_level'); 
		$this->load->view('template/backfooter');
	}

	public function m_level_adding($value = '')
	{
		//echo '<pre>';
		//      print_r($data);
		//    echo '<pre>';
		//  exit;



		$arr = array(
			'level_name' => $this->input->post('level_name')
		);
		$this->db->insert('tbl_level', $arr);
		// echo "<script type='text/javascript'>";
		// echo "window.location='m_level?act=done';";
		// echo "</script>";
		redirect('member/m_level', 'refresh');
	}


	public function edit_m_level($level_id)
	{
		$data['result'] = $this->member_model->read_m_level($level_id);
		//echo '<pre>';
		//      print_r($data);
		//    echo '<pre>';
		//  exit;


		$this->load->view('template/backheader');
		$this->load->view('member/edit_m_level', $data);
		$this->load->view('template/backfooter');
	}



	public function update_m_level($value = '')
	{

		//	echo '<pre>';
		//   print_r($_POST);
		//    echo '<pre>';
		//    exit;

		$arr = array(
			'level_name' => $this->input->post('level_name')
		);
		$this->db->where('level_id', $this->input->post('level_id'));
		$this->db->update('tbl_level', $arr);
		echo "<script type='text/javascript'>";
		echo "window.location='m_level?act=update';";
		echo "</script>";
	}


	public function confrm_m_level($level_id)
	{
		$data = array(
			'backlink'  => 'member/m_level',
			'deletelink' => 'member/remove_m_level/' . $level_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm', $data);
		$this->load->view('template/backfooter');
	}

	public function remove_m_level($level_id)
	{
		$this->member_model->remove_m_level($level_id);
		redirect('member/m_level', 'refresh');
	}
}
