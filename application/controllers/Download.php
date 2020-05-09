<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Download extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('download_model');
		if ($this->session->userdata('login_id') == NULL) {
			redirect('user/login');
		} 
	}

	public function index()
	{

		$data['results'] = $this->download_model->fetch_download(0, 0, '');

		$this->load->view('template/backheader');
		$this->load->view('download/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$data = array('error' => $this->upload->display_errors());
		$this->load->view('template/backheader');
		$this->load->view('download/newdata', $data);
		$this->load->view('template/backfooter');
	}

	public function adding($value = '')
	{

		$config['upload_path'] = './docload/'; //Folder สำหรับ เก็บ ไฟล์ที่  docload
		$config['allowed_types'] = '*';
		$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
		$this->upload->do_upload('d_file'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ d_file
		$this->load->library('upload', $config); //**สำคัญ* */

		$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

		//ตรวจสอบว่า การ Upload สำเร็จหรือไม่    
		if ($this->upload->display_errors()) {
			redirect('download?act=done', 'refresh');
		} else {   // หากไม่มีข้อผิดพลาดใดๆ เกิดข้อ ก็บันทึกข้อมูลส่วนอื่นตามปกติ             	   
			$arr = array(
				'ref_p_id' => $this->input->post('ref_p_id'),
				'd_title' => $this->input->post('d_title'),
				'd_detail' => $this->input->post('d_detail'),
				'd_file' => $filename
			);
			$this->db->insert('tbl_download', $arr);

			redirect('download?act=done', 'refresh');
		}
	}

	public function edit($d_id)
	{
		$data['result'] = $this->download_model->read_download($d_id);
	
		$this->load->view('template/backheader');
		$this->load->view('download/edit', $data);  
		$this->load->view('template/backfooter');
	}

	public function update($value='')
	{
	
		$config['upload_path'] = './docload/'; //Folder สำหรับ เก็บ ไฟล์ที่  docload
		$config['allowed_types'] = '*';
			$config['max_size']     = '2000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE; //เข้ารหัสชื่อไฟล์ที่อัพโหลด
            $d_last_update = date('Y-m-d H:i:s');

				$this->upload->initialize($config);   // เรียกใช้การตั้งค่า  
				$this->upload->do_upload('d_file'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ a_img
                $this->load->library('upload', $config);
			
				$filename = $this->upload->data('file_name');  // ถ้าอัพโหลดได้ เราสามารถเรียกดูข้อมูลไฟล์ที่อัพได้

				//ตรวจสอบว่า การ Upload สำเร็จหรือไม่  
                if ($this->upload->display_errors())  
                {                    
                         $arr1=array(
								'd_title'=> $this->input->post('d_title'),
								'd_detail'=> $this->input->post('d_detail'),
                                'd_last_update'=> $d_last_update
                        	);

                         $this->db->where('d_id', $this->input->post('d_id'));
                         $this->db->update('tbl_download', $arr1);

                        redirect('download?act=update', 'refresh');

                }else{

					$data = $this->upload->data();
                	$filename = $data['file_name'];
                	$data = $this->upload->data();
			
              
                	$arr=array(
								'd_title'=> $this->input->post('d_title'),
								'd_detail'=> $this->input->post('d_detail'),
                                'd_last_update'=> $d_last_update,
                        		'd_file'=> $filename

                        	);

                         $this->db->where('d_id', $this->input->post('d_id'));
                         $this->db->update('tbl_download', $arr);
                         redirect('download?act=update', 'refresh');
                }
}


	public function confrm($d_id)
	{
		$data = array(
			'backlink'  => 'download',
			'deletelink' => 'download/remove/' . $d_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm', $data);
		$this->load->view('template/backfooter');
	}

	public function remove($d_id)
	{
		$this->download_model->remove_download($d_id);
		redirect('download', 'refresh');
	}
}
