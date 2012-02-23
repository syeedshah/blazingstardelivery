<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
2	 
3	class verifyLogin extends CI_Controller {
4	 
5	 function __construct()
6	 {
7	   parent::__construct();
8	   $this->load->model('user','',TRUE);
9	 }
10	 
11	 function index()
12	 {
13	   //This method will have the credentials validation
14	   $this->load->library('form_validation');
15	 
16	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
17	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
18	 
19	   if($this->form_validation->run() == FALSE)
20	   {
21	     //Field validation failed.  User redirected to login page
22	     $this->load->view('loginForm');
23	   }
24	   else
25	   {
26	     //Go to private area
27	     redirect('success', 'refresh');
28	   }
29	 
30	 }
31	 
32	 function check_database($password)
33	 {
34	   //Field validation succeeded.  Validate against database
35	   $username = $this->input->post('username');
36	 
37	   //query the database
38	   $result = $this->user->login($username, $password);
39	 
40	   if($result)
41	   {
42	     $sess_array = array();
43	     foreach($result as $row)
44	     {
45	       $sess_array = array(
46	         'id' => $row->id,
47	         'username' => $row->username
48	       );
49	       $this->session->set_userdata('logged_in', $sess_array);
50	     }
51	     return TRUE;
52	   }
53	   else
54	   {
55	     $this->form_validation->set_message('check_database', 'Invalid username or password');
56	     return false;
57	   }
58	 }
59	}
60	?>