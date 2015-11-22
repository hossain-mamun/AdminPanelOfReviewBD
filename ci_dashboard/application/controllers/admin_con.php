<?php 
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Admin_Con extends CI_Controller{

    public function index(){
		$this->load->model('admincheck_model');
		if($this->admincheck_model->is_admin_logged_in()){
			
			$total_user=$this->admincheck_model->user_count();
			$total_post=$this->admincheck_model->post_count();
			$data['cal']=$this->calendar->generate();
			$data['homepage']='homepage';
			$data['home']='Home';
			$data['userlist']=$total_user;
			$data['postcount']=$total_post;
		$this->load->view('dashboard_layout',$data);	
		}
		else{
			$this->load->view('admin_view');
		}
		
		}
	public function validation(){

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pword', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{ 
		
		$this->load->view('admin_view');
	}
	else
		{ 

	      $result=$this->admincheck_model->admin_check();

			if($result){
				redirect('dashboard_con');
			}

			else{
				$data=array();
				$data['error_login']='Username or Password is invalid!';
				$this->load->view('admin_view',$data);
			}
		}
	}
	public function logout(){
	    if($this->admincheck_model->is_admin_logged_in()){
		$this->session->unset_userdata('current_admin_id');
		$this->session->unset_userdata('current_admin_name');

		$this->session->sess_destroy();
		redirect('admin_con/?logout=success');
	}
	else{
		$this->load->view('admin_view');
	}
	
	}
	
}