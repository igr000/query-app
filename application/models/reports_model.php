<?php
/**********************************************************************************
-- Reports_model is a model class that will validate the date range chosen from ---
-- query_form_enrolled_students page and set parameters for r_value. --------------
-----------------------------------------------------------------------------------
-- Author:Irene Gayle Roque -------------------------------------------------------
**********************************************************************************/
class Reports_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    
	public function query_enrolledStudents_dateBetween($datestart, $dateend){

		//calls report_lookup_model
		$this->load->model('report_lookup_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->report_lookup_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->report_lookup_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');
         
        //SELECT * FROM 'enrolment_profile' WHERE date(enr_dateEnrolled) BETWEEN '$datestart' AND '$dateend' && 'isEnrolled' = 1
		$this->db->where("date(enr_dateEnrolled) BETWEEN '$datestart' and '$dateend' and isEnrolled=1");
		$rs = $this->db->get('enrolment_profile');

		//fetch/display multi-dimensional array
		return $rs->result_array();


	}
}
?>