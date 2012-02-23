<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
	class loginController extends CI_Controller {
	 
	 function __construct()
	 {
	   parent::__construct();
	 }
	 
	 function index()
	 {
	   $this->load->helper(array('form', 'url'));
	   $this->load->view('header');
	$this->load->view('loginForm');
	$this->load->view('footer');
		  
 }
}
?>