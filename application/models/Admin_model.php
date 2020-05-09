<?php

class Admin_model extends CI_Model //Admin_model
{

	public $a_name; //ที่เราจะค้นหา 1 ฟิล 
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

	
	public function record_count($keyword)  //ค้นหา
	{
		$this->db->like('a_name',$keyword);  //ฟิลที่จะค้นหา
		$this->db->from('tbl_admin');  //ตาราง
		return $this->db->count_all_results();
	}


	public function fetch_admin($limit, $start,$keryword)
	{
		$this->db->like('a_name',$keryword); //ใส่ฟิลที่จะค้นหา 1 ฟิล
		$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_admin'); //ตาราง
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


	public function entry_admin($a_id) //entry_admin  เอา tbl_ ออก 
	{

		//print_r($_POST);
		//exit;
		//ฟิลที่จะใช้ ยกเว้น id  & timestamp 
		$this->a_name = $this->input->post('a_name');
		$this->username = $this->input->post('username');
		$this->password = md5($this->input->post('password'));
		

		if($a_id == NULL)  // pk 
		{
			$this->db->insert('tbl_admin', $this); // ชื่อตาราง 
		}
		else
		{
			$this->db->update('tbl_admin', $this, array('a_id'=> $a_id)); 
		}
	}


	public function read_admin($a_id){
		$this->db->where('a_id',$a_id); // pk 
		$query = $this->db->get('tbl_admin'); // table name
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


	public function remove_admin($a_id){ //delete 
		$this->db->delete('tbl_admin',array('a_id'=>$a_id));   //table name & pk 
	}
	

}
