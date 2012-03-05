<?php

class User_model extends CI_Model {

	public function insert_address($data) {
		        $this->load->database();
		        $this->db->insert("emails", $data);
		    }
		
	public function insert_careers($form_data) {
				$this->load->database();
				$this->db->insert("careers", $data);
				
			}
			
			/** 
		       * function SaveForm()
		       *
		       * insert form data
		       * @param $form_data - array
		       * @return Bool - TRUE or FALSE
		       */
			
			function SaveForm($form_data)
				{
					$this->load->database();
					$this->db->insert('careers', $form_data);

					if ($this->db->affected_rows() == '1')
					{
						return TRUE;
					}

					return FALSE;
				}
		}