<?php

class EmailForm extends CI_Controller {
               
	//php5 constructor
	function _construct(){
		parent::Controller();
		$this->load->model('user_model');
	}
		
	public function index() {
   		$this->load->helper("form");
	    $this->load->library("form_validation");

		    $this->form_validation->set_rules("email", "Email Address","required|valid_email|xss_clean");
		 
		    if ($this->form_validation->run() == false) {
		        $this->load->view('header');
				$this->load->view('leftnav');
				$this->load->view('homeview');
				$this->load->view('footer');
		    }
		    if ($this->user_model->insert_address($data) == TRUE) // the information has therefore been successfully saved in the db
				{
		        $email = $_POST["email"];
		        $data = array("email" => $email);
		 
		        $this->load->model("user_model");
		        $this->user_model->insert_address($data);
		        $this->load->view('header');
				$this->load->view('leftnav');
				$this->load->view('homeview');
				$this->load->view('footer');
	    }else{
			$this->load->view('header');
			$this->load->view('leftnav');
			$this->load->view('success');
			$this->load->view('footer');
	}
		}

}//end main
?>