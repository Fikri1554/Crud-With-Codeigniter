<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$username = $_POST['txt_user'];
				$password = $_POST['txt_pass'];
				$notif = $this->MLogin->GoLogin($username,$password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					if ($this->session->userdata('level')==1) {
						
						redirect(site_url('welcome'));
					}
					elseif ($this->session->userdata('level')==2) {
						redirect(site_url('welcome'));
					}
					
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}

		$this->load->view('VLogin');
	}
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
