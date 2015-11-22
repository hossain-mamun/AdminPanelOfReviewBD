<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?php 
  if (isset($home)) {
   echo $home;}
   elseif (isset($notice)) {
      echo $notice;
    } 
    elseif  (isset($manage_users)) {
      echo $manage_users;
    }
    elseif  (isset($user_post)) {
      echo $user_post;
    }
    elseif  (isset($user_comment)) {
      echo $user_comment;
    }
    elseif (isset($mail)) {
      echo $mail;
    }
  ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheets/admin.css");?>">
	<link rel="stylesheet"  href="<?php echo base_url("public/css/bootstrap.min.css");?>">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
       <div class="navbar-brand"><?php echo anchor('dashboard_con','ReviewBD.net'); ?></div> </div>
        <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('current_admin_name');?> <b class="caret"></b></a>
          	<ul class="dropdown-menu">
          	 <li><a href="<?php echo site_url(); ?>/admin_con/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
              
          	   </ul>
          	    </li>
          	     </ul>
          	      </div>
          	      </div>
          	      </div>
    <div class="container-fluid">
    <div class="row ">
     <div class="col-md-2 col-sm-4 col-xs-6 sidebar">
       <ul class="menu" id="nav">
         <li class="label ">Menu</li><br/>
          <li class="open">
            <a href="<?php echo site_url(); ?>/dashboard_con"><i class="fa fa-home"></i>  Home</a>
          </li>
          <br/> 
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i>  Users<b class="caret"></b></a>
           <ul class="dropdown-menu">
            <li><a href="<?php echo site_url(); ?>/dashboard_con/all_users">Manage-Users</a></li>
             
             <li><a href="<?php echo site_url(); ?>/dashboard_con/all_posts">Users Post</a></li>
             
             <li><a href="<?php echo site_url(); ?>/dashboard_con/all_comments">Users Comment</a></li>

             </ul>
             </li> 
             </br>
             <li><a href="<?php echo site_url(); ?>/dashboard_con/notice"><i class="fa fa-tasks"></i>  Notice</a></li>
             <br/>
             <li><a href="<?php echo site_url(); ?>/dashboard_con/send_mail"><i class="fa fa-at"></i>  Send Mail</a></li>
       </ul>
       </div>
    
    
       
        
         <div class="col-md-10 col-sm-6 col-xs-6 home">
         <?php 
         if (isset($homepage)) {
           $this->load->view('dashboard/'.$homepage);
         }
          elseif (isset($allUsers)) {
           $this->load->view('dashboard/'.$allUsers);
         }
         elseif (isset($allPosts)) {
           $this->load->view('dashboard/'.$allPosts);
         }
         elseif (isset($allComments)) {
           $this->load->view('dashboard/'.$allComments);
         }
         elseif (isset($Notice)) {
           $this->load->view('dashboard/'.$Notice);
         }
         elseif (isset($Mail)) {
           $this->load->view('dashboard/'.$Mail);
         }
         
         

         ?>
         </div>
         </div>
           </div>
         

<script src="<?php echo base_url();?>/public/js/jquery.js "></script>
<script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
</body>
</html>