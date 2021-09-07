<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}
		
		 public function get($username){
			$this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
			$result = $this->db->get('web_users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
			return $result;
    	}
		function GoLogin($username,$password){
			$this->db->select('*');
			$this->db->from('web_users');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if($query -> num_rows() == 1){
				$row = $query->row(); 
				$this->load->library('session');
				$this->session->set_userdata('level',$row->level);
				
    			return $row->level;
			}else{
				return false;
			}

	}}