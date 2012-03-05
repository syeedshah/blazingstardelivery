<?php

class Sitemap extends CI_Controller {


	//php5 constructor
	function _construct(){
		parent::Controller();
		$this->load->helper('url');
	}
	

	function index()
	{
		
		//$header_data["title"] = $nav_lang['sitemap'];
		
		// get meta tags from db and pass to view		
	//	$header_data['meta_tags'] = $this->lib_meta->get_tags($this->section, $this->level);			
		// get the meta description from db and pass to views		
	//	$header_data['meta_description'] = $this->lib_meta->get_description($this->section, $this->level);
		
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('sitemap');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
