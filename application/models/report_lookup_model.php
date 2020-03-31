<?php
/***************************************************************************
-- Report_lookup_model is a model class that contains the r_value method ---
-- which will lookup from multiple tables. ---------------------------------
----------------------------------------------------------------------------
-- Author:Irene Gayle Roque ------------------------------------------------
***************************************************************************/
class report_lookup_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    //initializes and creates r_value
	public function r_value($table, $field, $key, $return){
		$rs = $this->db->get_where($table, array($field => $key));
		$row = $rs->row();
		return $row->$return;

	}
}
?>