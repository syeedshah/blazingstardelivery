<?php
2	Class LoginModel extends CI_Model
3	{
4	 function loginModel($username, $password)
5	 {
6	   $this -> db -> select('id, username, password');
7	   $this -> db -> from('users');
8	   $this -> db -> where('username = ' . "'" . $username . "'");
9	   $this -> db -> where('password = ' . "'" . MD5($password) . "'");
10	   $this -> db -> limit(1);
11	 
12	   $query = $this -> db -> get();
13	 
14	   if($query -> num_rows() == 1)
15	   {
16	     return $query->result();
17	   }
18	   else
19	   {
20	     return false;
21	   }
22	 }
23	}
24	?>