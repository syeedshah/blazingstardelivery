<?php

class User_model extends CI_Model {

	function login($email)
		 {
		   $this->db->insert('bus',$data); 
		   $this -> db -> limit(1);
		 
		   $query = $this -> db -> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
		 }
		}