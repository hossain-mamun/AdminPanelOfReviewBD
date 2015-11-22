<?php 
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Users extends CI_Controller{
	public function index(){
		$this->load->model('admincheck_model');
		if($this->admincheck_model->is_admin_logged_in()){
		$data['homepage']='homepage';
		$this->load->view('dashboard_layout',$data);	
		}

     else{
     	redirect('admin_con/?loggedin first');
     }
}
	

	public function all_users(){
		$data['allUsers']='allUsers';
		$this->load->view('dashboard_layout',$data);
	}
}
