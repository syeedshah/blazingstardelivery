<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homeController extends CI_Controller {

	//php5 constructor
	function _construct(){
		parent::Controller();
}

	function index()
	{
		$this->load->view('header');
		$this->load->view('successView');
		$this->load->view('leftNav');
		$this->load->view('footer');
	}

}