<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function fetch_user_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$this->salt_pass($password));
		$query = $this->db->get('tbl_personnel');
		return $query->row();
	}
	public function record_count($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$this->salt_pass($password));
		return $this->db->count_all_results('tbl_personnel');
	}

	public function salt_pass($password)
	{
		//return $password;
		return md5($password);
	}

	public function read_user($p_id)
	{
		$this->db->where('p_id',$p_id);
		$query = $this->db->get('tbl_personnel');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function entry_user($p_id)
	{
		$data = array('p_name' => $this->input->post('p_name'));
			$this->db->update('tbl_personnel', $data, array('p_id'=> $p_id));
	}
}