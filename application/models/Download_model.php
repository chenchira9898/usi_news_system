<?php

class Download_model extends CI_Model 
{

	public $p_name;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		if ($this->session->userdata('login_id') == NULL) {
			redirect('user/login');
        }
	}

	public function fetch_download()
	{
		$this->db->select('d.*,p.*');
		$this->db->from('tbl_download as d');
		$this->db->join('tbl_personnel as p', 'p.p_id=d.ref_p_id');
		$this->db->order_by('d.d_id', 'desc');
		
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		} 
		return FALSE;
	} 



	public function read_download($d_id){
		$this->db->select('d.*');
		$this->db->from('tbl_download as d');
		$this->db->where('d.d_id',$d_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data; 
		}
		return FALSE;
	} 

	public function fetch_gall($a_id)
	{
		$this->db->select('a.*');
		$this->db->from('tbl_img as a');
		$this->db->where('a.ref_a_id',$a_id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}


	public function upload_image($inputdata,$filename)
    {
      $ref_a_id = $_POST['ref_a_id']; 
      if($filename!='' ){
      $filename1 = explode(',',$filename);
      foreach($filename1 as $file){
      $file_data = array(
      'm_img' => $file,
      'ref_a_id' =>$ref_a_id
      );
      $this->db->insert('tbl_img', $file_data);
      }
      }
    }




	public function remove_download($d_id){ //delete 
		$this->db->delete('tbl_download',array('d_id'=>$d_id));
	}



	
}
