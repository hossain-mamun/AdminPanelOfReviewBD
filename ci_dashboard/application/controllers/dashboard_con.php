<?php 
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Dashboard_con extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admincheck_model');
		if(!$this->admincheck_model->is_admin_logged_in()){
		redirect('admin_con/?loggedin first');	
		}

     
	}


	public function index(){
		
		  redirect('admin_con');
	
}


public function all_users(){
	    $this->load->model('admincheck_model');
	    $data['allUsers']='allUsers';
	    $data['manage_users']='Users List';
	    $data['allUserData']= $this->admincheck_model->all_user_list();
		$this->load->view('dashboard_layout',$data);
	
}

#User Delete
public function user_delete(){
	  $user_id = $_GET['var1'];
	  $user_email = $_GET['var2'];
	  if ($this->admincheck_model->user_delete($user_id,$user_email)) {
	  	redirect('dashboard_con/all_users');
	  }
	  else{
	  	redirect('dashboard_con');
	  }
      
	 

}
#User Posts
public function all_posts(){
	    $this->load->model('admincheck_model');
	    $data['allPosts']='allPosts';
	    $data['user_post']='Users Post';
	    $data['allUserPost']= $this->admincheck_model->all_post_list();
		$this->load->view('dashboard_layout',$data);
	
}
#post delete
public function post_delete($id){
      
	  if ($this->admincheck_model->post_delete($id)) {
	  	redirect('dashboard_con/all_posts');
	  }
	  else{
	  	redirect('dashboard_con');
	  }

}
#all Comments
public function all_comments(){
	    $this->load->model('admincheck_model');
	    $data['allComments']='allComments';
	    $data['user_comment']='Users Comment';
	    $data['allUserComment']= $this->admincheck_model->all_comment_list();
		$this->load->view('dashboard_layout',$data);
	
}
#comment delete
public function comment_delete($id){
      
	  if ($this->admincheck_model->comment_delete($id)) {
	  	redirect('dashboard_con/all_comments');
	  }
	  else{
	  	redirect('dashboard_con');
	  }

}
public function notice(){
	$data['Notice']='Notice';
	$data['notice']='Write New Notice';
	$this->load->view('dashboard_layout',$data);

}
public function notice_validation(){
$this->form_validation->set_rules('subject', 'Subject', 'required');
$this->form_validation->set_rules('notice_post', 'Text', 'required');
if ($this->form_validation->run() == FALSE)
		{ 
		
		$data['Notice']='Notice';
		$data['notice']='Wrong Validity';
	    $this->load->view('dashboard_layout',$data);

}
else{
	if ($this->admincheck_model->notice_insert()) {

		$data['Notice']='Notice';
		$data['notice']='Success Message';
		$data['success']='Your notice has been written successfully!';
	    $this->load->view('dashboard_layout',$data);
	}
}
}
public function send_mail(){
	$data['Mail']='Mail';
	$data['mail']='Send Mail';
	$this->load->view('dashboard_layout',$data);

}
public function mail_validation(){
	$this->form_validation->set_rules('subject', 'Subject', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('message', 'Email_Body', 'required');
	if ($this->form_validation->run() == FALSE)
		{ 

    $data['Mail']='Mail';
	$data['mail']='Wrong Validity';
	$this->load->view('dashboard_layout',$data);
		}
		else{
   $config = Array(
  'protocol' => 'smtp',
  'mail_path' => '/usr/sbin/sendmail',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'reviewbd82@gmail.com', 
  'smtp_pass' => 'reviewbdwebsite', 
  
  ); 
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
			$this->email->to(set_value("email"));
			$this->email->from("reviewbd82@gmail.com");
			
			$this->email->subject(set_value("subject"));
			$this->email->message(set_value("message"));

			 if($this->email->send())
           {
           	$data['Mail']='Mail';
			$data['mail']='Success Message';
			$data['success']='Your mail has been sent successfully!';
			$this->load->view('dashboard_layout',$data);
			
		   }
		      else
            {
        show_error($this->email->print_debugger());
           }

		}


}
}
?>