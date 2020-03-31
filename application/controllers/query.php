<?php
/****************************************************************************************
-- Query controller class redirects user to pages depending if date range values from ---
-- query_form_enrolled_students page have been set or not. ------------------------------
-----------------------------------------------------------------------------------------
-- Author:Irene Gayle Roque -------------------------------------------------------------
****************************************************************************************/
class Query extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Queries';
		//loads Queries page and lets this page use $title
		$this->load->view('Queries', $data);
	}
	public function enrolled_students(){
		$data['title'] = 'Enrolled Students Query';

		//if user is redirected to http://localhost/query-app/query/view/, proceed to nested if-else statements.
		if($this->uri->segment(3)=='view'){

            //if date range inputs have not been set once user clicks the submit button from query_form_enrolled_students page, it will redirect to enrolled_students method of query controller class
			if(!isset($_POST['btnsubmit'])){
				redirect(base_url('query/enrolled_students'));
			}

            //set txtdatestart input as $datestart
			$datestart = $this->input->post('txtdatestart');
			//set txtdateend input as $dateend
			$dateend = $this->input->post('txtdateend');

			$this->load->model('reports_model');

			//lookups record related to date range using reports_model's query_enrolledStudents_dateBetween method then, loads query_enrolled_students page along with the records set as $students
			$data['students'] = $this->reports_model->query_enrolledStudents_dateBetween($datestart, $dateend);
			$this->load->view('query_enrolled_students', $data);

		}else{
			//if user wasn't redirected to http://localhost/query-app/query/view/, goes back to query_form_enrolled_students page
			$this->load->view('query_form_enrolled_students', $data);
		}
	}
}
?>
