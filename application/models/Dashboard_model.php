<?php

class Dashboard_model extends CI_Model //ads_click_model
{

	public function __construct()
	{
		parent::__construct();
	}


	public function record_count()
	{
		$this->db->from('tbl_counter');
		return $this->db->count_all_results();
	}


public function fetch_report_by_mo($value='')
	{
		$sql ="SELECT COUNT(c_id) as total, `c_date` FROM tbl_counter GROUP BY DATE_FORMAT(`c_date`, '%m%')";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}


}
