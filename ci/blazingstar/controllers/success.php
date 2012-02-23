<?php 

	class success extends CI_Controller {

		//php5 constructor
		function _construct(){
			parent::Controller();
	}

		function index()
		{
			$this->load->view('header');
			$this->load->view('success');
			$this->load->view('leftNav');
			$this->load->view('footer');
		}

	}