<div class="nDesign">
<div class="jumbotron jumbodesign">
<h2><strong>Write a New Notice</strong></h2>
</div>

  <div class="row ">	
   <div class="col-md-8 col-sm-10 col-xs-10 rowdesign">

   <?php 
   if(validation_errors()){
   ?>
   <div class="alert">
     <?php echo validation_errors();?>
   </div>
    <?php } ?>
    <?php 
   if(isset($success)){
   ?>
   <div class="success">
     <?php echo $success;?>
   </div>
    <?php } ?>
    <?php echo form_open('dashboard_con/notice_validation'); ?>
      
             <div class="form-group">
              <label for="subject">Subject :</label>
               <div class="input-group"> 
           <?php $data = array(
			  'type'		=> 'text',
              'name'        => 'subject',
			  'class'		=> 'form-control',
              'id'          => 'subject',
              'placeholder' => 'Enter Subject',
            );
           echo form_input($data); ?>
         </div>
         </div>
         </div>
         </div>
       <div class="row ">
        <div class="col-md-7 col-sm-8 col-xs-10 rowdesign ">
         <div class="form-group">
          <label for="post"class="control-level ">Post:</label>
           <?php $data = array(
			  'type'		=> 'textarea',
              'name'        => 'notice_post',
			  'class'		=> 'form-control',
              'id'          => 'post',
              'placeholder' => '',
			  'rows' 		=>  '9',
			
            );

          echo form_textarea($data); ?>
       </div>
       </div>
       </div>
       <div class=" button">
               <?php 
               $data=array(
              'type' => 'submit',
              'name' => 'button',
              'class' => 'btn btn-success',
              'value'=>'Publish');
                echo form_submit($data);?>
       </div>
       <?php echo form_close(); ?> 
       </div>
       </div>
