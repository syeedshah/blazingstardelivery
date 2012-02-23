<?php

class EmailForm extends CI_Controller {
               
	//php5 constructor
	function _construct(){
		parent::Controller();
		$this->load->model('User_model');
	}
		
	function index(){
		$this->register();
		
		
	}
	function resister(){
			
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email Address', 'valid_email|xss_clean');
	
	if($this->form_validation->run() == FALSE){
		//didnt run or errors
		$this->load->view('header');
		$this->load->view('leftNav');
		$this->load->view('homeView');
		$this->load->view('footer');
		
	}else{
		//it worked process and enter into DB	
			$email => $this->input->post('email');
		echo $email;
			
	}//end else
}//end index

function email_not_exists($email){
	
}
}//end main
?>