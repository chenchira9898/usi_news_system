<?php

class member_model extends CI_Model 
{

	public $p_name;

	public function __construct()
	{
		parent::__construct();
	}

	
	public function record_count($keyword)  //ค้นหา
	{
		$this->db->like('p_name',$keyword);  //ฟิลที่จะค้นหา
		$this->db->from('tbl_personnel');  //ตาราง
		return $this->db->count_all_results();
	}


	public function fetch_member($limit, $start,$keryword)
	{
		$this->db->select('p.*,l.*');
		$this->db->from('tbl_personnel as p');
		$this->db->join('tbl_level as l', 'l.level_id=p.p_level');
		$this->db->order_by('p.p_id', 'desc');
		$this->db->limit($limit, $start);
		$this->db->like('p.p_name',$keryword);
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



	public function read_member($p_id){
		$this->db->select('p.*,l.*');
		$this->db->from('tbl_personnel as p');
		$this->db->join('tbl_level as l', 'l.level_id=p.p_level');
		$this->db->where('p.p_id',$p_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function read_member2($p_id){
		$this->db->select('p.*');
		$this->db->from('tbl_personnel as p');
		$this->db->join('tbl_level1 as l', 'l.level_id=p.p_level');
		$this->db->where('p.p_id',$p_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


	public function remove_member($p_id){ //delete 
		$this->db->delete('tbl_personnel',array('p_id'=>$p_id));   //table name & pk 
	}
	

	//level

	
	public function record_count_m_level($keyword)  
	{
		$this->db->like('level_name',$keyword); 
		$this->db->from('tbl_level');  
		return $this->db->count_all_results();
	}


	public function fetch_m_level($limit, $start,$keryword)
	{
		$this->db->like('level_name',$keryword);  
		$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_level');  
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

	public function read_m_level($level_id){
		$this->db->where('level_id',$level_id);
		$query = $this->db->get('tbl_level');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


	public function remove_m_level($level_id){ //delete 
		$this->db->delete('tbl_level',array('level_id'=>$level_id));   //table name & pk 
	}

	//position

	
	public function record_count_m_position($keyword)  
	{
		$this->db->like('po_name',$keyword); 
		$this->db->from('tbl_position');  
		return $this->db->count_all_results();
	}


	public function fetch_m_position($limit, $start,$keryword)
	{
		$this->db->like('po_name',$keryword);  
		$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_position');  
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

	public function read_m_position($po_id){
		$this->db->where('po_id',$po_id);
		$query = $this->db->get('tbl_position');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}


	public function remove_m_position($po_id){ //delete 
		$this->db->delete('tbl_position',array('po_id'=>$po_id));   //table name & pk 
	}

}
