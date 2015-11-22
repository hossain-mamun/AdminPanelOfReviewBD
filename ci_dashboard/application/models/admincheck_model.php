<?php
class Admincheck_Model extends CI_Model{
	public function admin_check(){
		$useremail=$this->input->post('email');
        $password=md5($this->input->post('pword'));
        $attr=array(
          'Email'=>$useremail,
          'Password'=>$password
        	);
		$result=$this->db->get_where('admincheck',$attr);
		
		if($result->num_rows()==1){
        $attr=array(
       
       'current_admin_id' => $result->row(0)->Id,
       'current_admin_name' =>$result->row(0)->Name,
       'is_user_logged_in' =>1,

         );
        //session set
        $this->session->set_userdata($attr);
        return TRUE;
		}
		else{
			return FALSE;
		}
		
	}

	//is user logged in
	public function is_admin_logged_in(){
		return $this->session->userdata('current_admin_id') !=FALSE;
	}
	#User List
	public function all_user_list(){
		$this->db->select("*");
		$this->db->from('signup');
	    $this->db->order_by("id", "desc");
		$query=$this->db->get();
		$results=$query->result();
		return $results;
	}
	#User count function
    public function user_count(){

       $this->db->select('id');
       $this->db->distinct();
       $this->db->from('signup');
       $query = $this->db->get();
       return $query->num_rows();
   }

	#User Delete
	public function user_delete($id,$mail){
     $query=$this->db->delete('signup',array('id' => $id));
     $query2=$this->db->delete('comments',array('mail' => $mail));
     $query1=$this->db->delete('posts',array('email' => $mail));
     
     if ($this->db->affected_rows()==1) {
     	return TRUE;
     }
     else{
     	return FALSE;
     }
	}
	#all posts
	public function all_post_list(){
        $this->db->select("*");
		$this->db->from('posts');
		$this->db->order_by("post_id", "desc");
		$query=$this->db->get();
		$results=$query->result();
		return $results;
	}
	#Post count function
    public function post_count(){
    	
       $this->db->select('post_id');
       $this->db->distinct();
       $this->db->from('posts');
       $query = $this->db->get();
       return $query->num_rows();

    }

	#post delete
	public function post_delete($id){
     $query=$this->db->delete('posts',array('post_id' => $id ));
     if ($this->db->affected_rows()==1) {
     	return TRUE;
     }
     else{
     	return FALSE;
     }
	}
	#all Comment
	public function all_comment_list(){
		$this->db->select("*");
		$this->db->from('comments');
		$this->db->order_by("comment_id", "desc");
		$query=$this->db->get();
		$results=$query->result();
		return $results;
	}
	#comment Delete
	public function comment_delete($id){
     $query=$this->db->delete('comments',array('comment_id' => $id ));
     if ($this->db->affected_rows()==1) {
     	return TRUE;
     }
     else{
     	return FALSE;
     }
	}
	public function notice_insert(){
		$attr= array(
			'subject' =>$this->input->post('subject') ,
			'post' =>$this->input->post('notice_post') ,
            'Admin_Name'=>$this->session->userdata('current_admin_name')
             );

		$insert=$this->db->insert('notice',$attr);
		if ($insert) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}
?>