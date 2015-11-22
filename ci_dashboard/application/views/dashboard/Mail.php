<div class="mailformbg">
<div class="row mailform">
<div class="col-md-6 col-md-push-2">
<?php 
   if(validation_errors()){
   ?>
   <div class="alert">
     <?php echo validation_errors();?>
   </div>
    <?php } 
     if(isset($success)){
   ?>
   <div class="success">
     <?php echo $success;?>
   </div>
    <?php } ?>
<?php echo form_open('dashboard_con/mail_validation'); ?>
<div class="form-group">
<label for="email">To </label>
 

<input type="email" class="form-control" name="email" id="email"/>

</div>
<div class="form-group">
<label for="subject">Subject</label>

<input type="text" class="form-control" name="subject" id="subject" />

</div>
<div class="form-group">
<label for="message">Your Message&nbsp;<span id="user_feedback_message"></span></label>
<textarea class="form-control" rows="7" name='message' id="message" ></textarea>
</div>
<div class="form-group ">
<input type="submit" class="btn btn-success btn-lg" value="Send" />
</div>  
<?php echo form_close(); ?> 
</div>
</div>
</div>
