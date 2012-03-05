<?php

class Careers extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('user_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[50]');			
		$this->form_validation->set_rules('phone', 'phone', 'is_numeric|max_length[15]');			
		$this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|max_length[150]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('header');
			$this->load->view('leftnav');
			$this->load->view('sucess');
			$this->load->view('footer');
		
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'name' => set_value('name'),
					       	'phone' => set_value('phone'),
					       	'email' => set_value('email')
						);
					
			// run insert model to write data to db
		
			if ($this->user_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				$this->load->view('header');
				$this->load->view('leftnav');
				$this->load->view('homeview');
				$this->load->view('footer');
				   // or whatever logic needs to occur
			}
			else
			{
				$this->load->view('header');
				$this->load->view('leftnav');
				$this->load->view('success');
				$this->load->view('footer');
				
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>