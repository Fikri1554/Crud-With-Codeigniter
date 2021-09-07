<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UAS extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}
//crud data users
		public function DataUsers()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('web_users','kd_users',$nis)->row();
				$data['detail']['kd_users']= $tampil->kd_users;
	            $data['detail']['name']= $tampil->name;
	            $data['detail']['email']= $tampil->email;
	            $data['detail']['username']= $tampil->username;
	            $data['detail']['password']= $tampil->password;
	            $data['detail']['level']= $tampil->level;
			$data['content']='Users/VFormUpdateUsers';
		}
		else
		{	
			$data['Datausers']=$this->MSudi->GetDataWhere2('web_users','delete_date','0000-00-00 00:00:00');
			$data['content']='Users/VUsers';
		}


		$this->load->view('welcome_message',$data);
	}

	public function VFormAddUsers()
	{
		$data['DataUsers']=$this->MSudi->GetData('web_users');
		$data['content']='Users/VFormAddUsers';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataUsers()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Passsword', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Users/VFormAddUsers';
			$this->load->view('welcome_message',$data);
		}
		else{
		$add['kd_users']=$this->input->post('kd_users');
        $add['name']= $this->input->post('name');
        $add['email']= $this->input->post('email'); 
        $add['username']= $this->input->post('username');
        $add['password']= $this->input->post('password');  
          $add['level']= $this->input->post('level'); 
          $add['insert_date']= $this->input->post('insert_date'); 
       	$this->MSudi->AddData('web_users',$add);
        redirect(site_url('UAS/DataUsers'));
	}
}

	public function UpdateDataUsers()
	{
		$nis=$this->input->post('kd_users');
		$update['name']= $this->input->post('name');
        $update['email']= $this->input->post('email');
        $update['username']= $this->input->post('username');
        $update['password']= $this->input->post('password');
        $update['level']= $this->input->post('level');
         $update['update_date']= $this->input->post('update_date');
        $this->MSudi->UpdateData('web_users','kd_users',$nis,$update);
		redirect(site_url('UAS/DataUsers'));
	}
	public function deletedUsers()
	{
		$data['Datausers']=$this->MSudi->GetDataNotLike('web_users','delete_date','0000-00-00 00:00:00');
		$data['content']='users/VDeletedUsers';
		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataUsers()
	{
		$nis=$this->uri->segment('3');
		$update['delete_date'] = 0;
        $this->MSudi->UpdateData('web_users','kd_users',$nis,$update);
       	redirect(site_url('UAS/deletedUsers'));
	}

	public function DeleteDataUsers()
	{
		$nis=$this->uri->segment('3');
        $this->MSudi->DeleteData('web_users','kd_users',$nis);
       	redirect(site_url('UAS/DataUsers'));
	}
	//crud data users

	//crud data Menu
public function DataMenu()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('web_menu','kd_menu',$nis)->row();
				$data['detail']['kd_menu']= $tampil->kd_menu;
				$data['detail']['name']= $tampil->name;
	            $data['detail']['site_url']= $tampil->site_url;
			$data['content']='Menu/VFormUpdateMenu';
		}
		else
		{	
			$data['Datamenu']=$this->MSudi->GetDataWhere2('web_menu','delete_date','0000-00-00 00:00:00');
			$data['content']='Menu/VMenu';
		}


		$this->load->view('welcome_message',$data);
	}
	public function deletedMenu()
	{
		$data['Datamenu']=$this->MSudi->GetDataNotLike('web_menu','delete_date','0000-00-00 00:00:00');
		$data['content']='Menu/VDeletedMenu';
		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataMenu()
	{
		$nis=$this->uri->segment('3');
		$update['delete_date'] = 0;
        $this->MSudi->UpdateData('web_menu','kd_menu',$nis,$update);
       	redirect(site_url('UAS/deletedMenu'));
	}

	public function VFormAddMenu()
	{
		$data['DataMenu']=$this->MSudi->GetData('web_menu');
		$data['content']='Menu/VFormAddMenu';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataMenu()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('site_url', 'site url', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Menu/VFormAddMenu';
			$this->load->view('welcome_message',$data);
		}
		else{
		$add['kd_menu']=$this->input->post('kd_menu');
        $add['name']= $this->input->post('name');
        $add['site_url']= $this->input->post('site_url'); 
        $add['insert_date']= $this->input->post('insert_date');
       	$this->MSudi->AddData('web_menu',$add);
        redirect(site_url('UAS/DataMenu'));
	}
}

	public function UpdateDataMenu()
	{
		$nis=$this->input->post('kd_menu');
		$update['name']= $this->input->post('name');
        $update['site_url']= $this->input->post('site_url');
        $update['update_date']= $this->input->post('update_date');
        $this->MSudi->UpdateData('web_menu','kd_menu',$nis,$update);
		redirect(site_url('UAS/DataMenu'));
	}

	public function DeleteDataMenu()
	{
		$nis=$this->uri->segment('3');
		date_default_timezone_set('Asia/Jakarta'); 
		$update['delete_date'] = date("y-m-d H:i:s");
        $this->MSudi->UpdateData('web_menu','kd_menu',$nis,$update);
       	redirect(site_url('UAS/DataMenu'));
	}

//crud data Menu
	//crud data Access
public function DataAccess()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('web_access','kd_access',$nis)->row();
				$data['detail']['kd_access']= $tampil->kd_access;
				$data['detail']['kd_users']= $tampil->kd_users;
	            $data['detail']['kd_menu']= $tampil->kd_menu;

			$data['content']='Access/VFormUpdateAccess';
		}
		else
		{	
			$data['Dataaccess']=$this->MSudi->GetDataWhere2('web_access','delete_date','0000-00-00 00:00:00');;
			$data['content']='Access/VAccess';
		}


		$this->load->view('welcome_message',$data);
	}

	public function VFormAddAccess()
	{
		$data['DataAccess']=$this->MSudi->GetData('web_access');
		$data['content']='Access/VFormAddAccess';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataAccess()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kd_users', 'kode users', 'required');
		$this->form_validation->set_rules('kd_menu', 'Kode menu', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Access/VFormAddAccess';
			$this->load->view('welcome_message',$data);
		}
		else{
		$add['kd_access']=$this->input->post('kd_access');
        $add['kd_users']= $this->input->post('kd_users');
        $add['kd_menu']= $this->input->post('kd_menu'); 
        $add['insert_date']= $this->input->post('insert_date');
       	$this->MSudi->AddData('web_access',$add);
        redirect(site_url('UAS/DataAccess'));
	}
}
public function deletedAccess()
	{
		$data['Dataaccess']=$this->MSudi->GetDataNotLike('web_access','delete_date','0000-00-00 00:00:00');
		$data['content']='Access/VDeletedAccess';
		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataAccess()
	{
		$nis=$this->uri->segment('3');
		$update['delete_date'] = 0;
        $this->MSudi->UpdateData('web_access','kd_access',$nis,$update);
       	redirect(site_url('UAS/deletedAccess'));
	}

	public function UpdateDataAccess()
	{
		$nis=$this->input->post('kd_access');
		$update['kd_users']= $this->input->post('kd_users');
        $update['kd_menu']= $this->input->post('kd_menu');
        $update['update_date']= $this->input->post('update_date');
        $this->MSudi->UpdateData('web_access','kd_access',$nis,$update);
		redirect(site_url('UAS/DataAccess'));
	}

	public function DeleteDataAccess()
	{
		$nis=$this->uri->segment('3');
		date_default_timezone_set('Asia/Jakarta'); 
		$update['delete_date'] = date("y-m-d H:i:s");
        $this->MSudi->UpdateData('web_access','kd_access',$nis,$update);
       	redirect(site_url('UAS/DataAccess'));
	}
//crud data access
//crud data Profile
public function DataProfile()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('web_profile','kd_profile',$nis)->row();
				$data['detail']['kd_profile']= $tampil->kd_profile;
				$data['detail']['subject']= $tampil->subject;
	            $data['detail']['content']= $tampil->content;
	            $data['detail']['publish']= $tampil->publish;
			$data['content']='Profile/VFormUpdateProfile';
		}
		else
		{	
			$data['Dataprofile']=$this->MSudi->GetDataWhere2('web_profile','delete_date','0000-00-00 00:00:00');
			$data['content']='Profile/VProfile';
		}


		$this->load->view('welcome_message',$data);
	}
	public function deletedProfile()
	{
		$data['Dataprofile']=$this->MSudi->GetDataNotLike('web_profile','delete_date','0000-00-00 00:00:00');
		$data['content']='Profile/VDeletedProfile';
		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataProfile()
	{
		$nis=$this->uri->segment('3');
		$update['delete_date'] = 0;
        $this->MSudi->UpdateData('web_profile','kd_profile',$nis,$update);
       	redirect(site_url('UAS/deletedProfile'));
	}

	public function VFormAddProfile()
	{
		$data['DataProfile']=$this->MSudi->GetData('web_profile');
		$data['content']='Profile/VFormAddProfile';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataProfile()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('subject', 'Nama', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Profile/VFormAddProfile';
			$this->load->view('welcome_message',$data);
		}
		else{
		$add['kd_profile']=$this->input->post('kd_profile');
        $add['subject']= $this->input->post('subject');
        $add['content']= $this->input->post('content'); 
        $add['publish']= $this->input->post('publish'); 
        $add['insert_date']= $this->input->post('insert_date');
       	$this->MSudi->AddData('web_profile',$add);
        redirect(site_url('UAS/DataProfile'));
	}
}

	public function UpdateDataProfile()
	{
		$nis=$this->input->post('kd_profile');
		$update['subject']= $this->input->post('subject');
        $update['content']= $this->input->post('content');
        $update['publish']= $this->input->post('publish'); 
        $update['update_date']= $this->input->post('update_date');
        $this->MSudi->UpdateData('web_profile','kd_profile',$nis,$update);
		redirect(site_url('UAS/DataProfile'));
	}

	public function DeleteDataProfile()
	{
		$nis=$this->uri->segment('3');
		date_default_timezone_set('Asia/Jakarta'); 
		$update['delete_date'] = date("y-m-d H:i:s");
        $this->MSudi->UpdateData('web_profile','kd_profile',$nis,$update);
       	redirect(site_url('UAS/DataProfile'));
	}
//crud data Profile
//crud data Video
public function DataVideo()
	{

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('web_video','kd_video',$nis)->row();
				$data['detail']['kd_video']= $tampil->kd_video;
				$data['detail']['subject']= $tampil->subject;
				$data['detail']['link']= $tampil->link;
	            $data['detail']['content']= $tampil->content;
	            $data['detail']['publish']= $tampil->publish;
			$data['content']='Video/VFormUpdateVideo';
		}
		else
		{	
			$data['Datavideo']=$this->MSudi->GetDataWhere2('web_video','delete_date','0000-00-00 00:00:00');
			$data['content']='Video/VVideo';
		}


		$this->load->view('welcome_message',$data);
	}
	public function deletedVideo()
	{
		$data['Datavideo']=$this->MSudi->GetDataNotLike('web_video','delete_date','0000-00-00 00:00:00');
		$data['content']='Video/VDeletedVideo';
		$this->load->view('welcome_message',$data);
	}
	public function RestoreDataVideo()
	{
		$nis=$this->uri->segment('3');
		$update['delete_date'] = 0;
        $this->MSudi->UpdateData('web_video','kd_video',$nis,$update);
       	redirect(site_url('UAS/deletedVideo'));
	}

	public function VFormAddVideo()
	{
		$data['DataVideo']=$this->MSudi->GetData('web_video');
		$data['content']='Video/VFormAddVideo';
		$this->load->view('welcome_message',$data);
	}
	public function AddDataVideo()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('subject', 'Nama', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Video/VFormAddVideo';
			$this->load->view('welcome_message',$data);
		}
		else{
		$add['kd_video']=$this->input->post('kd_video');
        $add['subject']= $this->input->post('subject');
         $add['link']= $this->input->post('link');
        $add['content']= $this->input->post('content'); 
        $add['publish']= $this->input->post('publish'); 
        $add['insert_date']= $this->input->post('insert_date');
       	$this->MSudi->AddData('web_video',$add);
        redirect(site_url('UAS/DataVideo'));
	}
}

	public function UpdateDataVideo()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('subject', 'Nama', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');
		$this->form_validation->set_rules('link', 'link', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan diisi !');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content']='Video/VFormAddVideo';
			$this->load->view('welcome_message',$data);
		}
		else{
		$nis=$this->input->post('kd_video');
		$update['subject']= $this->input->post('subject');
        $update['link']= $this->input->post('link');
        $update['content']= $this->input->post('content');
        $update['publish']= $this->input->post('publish'); 
        $update['update_date']= $this->input->post('update_date');
        $this->MSudi->UpdateData('web_video','kd_video',$nis,$update);
		redirect(site_url('UAS/DataVideo'));
	}
}
	public function DeleteDataVideo()
	{
		$nis=$this->uri->segment('3');
		date_default_timezone_set('Asia/Jakarta'); 
		$update['delete_date'] = date("y-m-d H:i:s");
        $this->MSudi->UpdateData('web_video','kd_video',$nis,$update);
       	redirect(site_url('UAS/DataVideo'));
	}
}