<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homeController extends CI_Controller {

	//php5 constructor
	function _construct(){
		parent::Controller();
		$this->load->model('emailForm');
}

	function index()
	{
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('homeview');
		$this->load->view('footer');
	}

}