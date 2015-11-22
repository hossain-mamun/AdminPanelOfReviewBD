<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Admin panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheets/admin.css");?>">
	<link rel="stylesheet"  href="<?php echo base_url("public/css/bootstrap.min.css");?>">
</head>
<body class="body">

<div class="container contDesign">

<div class="jumbotron jumbodesign">
<h2><strong>Only the Admin accessable</strong></h2>
<small>it's restricted</small>
</div>



 <div class="container ">
  <div class="row ">	
   <div class="col-md-6 col-sm-7 col-xs-10 rowdesign">

   <?php 
   if(validation_errors()){
   ?>
   <div class="alert">
     <?php echo validation_errors();?>
   </div>
  
  <?php
   }
   if(isset($error_login))
   {
    ?>
     <div class="alert">
     <?php echo $error_login;?>
     </div>
     <?php } ?>

    <?php echo form_open('admin_con/validation'); ?>
      <div class="form-group">
       <label for="exampleInputEmail1">Email :</label>
        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <?php $data = array(
			   'type'		=> 'email',
              'name'        => 'email',
			  'class'		=> 'form-control',
              'id'          => 'exampleInputEmail1',
              'placeholder' => 'Enter Email',
            );
         echo form_input($data); ?>
               </div>
                </div>
                 </div>
                  </div>
                  

<div class="row ">	
   <div class="col-md-6 col-sm-7 col-xs-10 rowdesign">
      <div class="form-group">
       <label for="pass">Password :</label>
        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
         <?php $data = array(
			   'type'		=> 'password',
              'name'        => 'pword',
			  'class'		=> 'form-control',
              'id'          => 'pass',
              'placeholder' => 'Enter Password',
            );
         echo form_password($data); ?>
         
               </div>
                </div>
                 </div>
                  </div><br/>
                  <div class=" button">
                  <?php 
                  $data=array(
                  'type' => 'submit',
                   'name' => 'button',
                   'class' => 'btn btn-success',
                    'value'=>'SignIn');
                   echo form_submit($data);?>
       </div>
       <?php echo form_close(); ?> 
</div>

</div>
<script type="text/js" src="<?php echo base_url("public/js/jquery.js.css")?>; "></script>
<script type="text/js" src="<?php echo base_url("public/js/bootstrap.min.css")?>;"></script>
</body>
</html>