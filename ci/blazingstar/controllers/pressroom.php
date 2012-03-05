<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PressRoom extends CI_Controller {

	//php5 constructor
	function _construct(){
		parent::Controller();
		$this->load->model('user_model');
}

	function index()
	{
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('pressroom');
		$this->load->view('footer');
	}

}