<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		

			if($this->session->userdata('Login'))
		{
				$data['content']='VMain';
			$this->load->view('welcome_message',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}
	}

	public function Forms()
	{
		$data['content']='VForms';
		$this->load->view('welcome_message',$data);
	}

	public function Tables()
	{
		$data['content']='VTables';
		$this->load->view('welcome_message',$data);
	}


	public function Buttons()
	{
			$data['content']='VButtons';
			$this->load->view('welcome_message',$data);
	}

	public function Cards()
	{
		$data['content']='VCards';
		$this->load->view('welcome_message',$data);
	}

	public function Charts()
	{
		$data['content']='VCharts';
		$this->load->view('welcome_message',$data);
	}

}
