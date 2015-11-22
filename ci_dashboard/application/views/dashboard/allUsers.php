<div>
 <h4>All Users List</h4>	


   <table class="table table-bordered table-striped table-hover">
    <thead>
     <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Division</th>
      <th>Action</th>
    			
    		
    </tr>
    </thead>
     <tbody>
     <?php 
      if ($allUserData) {
      	foreach ($allUserData as $signup) {
      		$u_id=  $signup->id;
          
          $u_mail=$signup->email;
          
     ?>
     	<tr id="<?php echo $u_id;?>">
         <td><?php echo $signup->name;?></td>	
         <td><?php echo $u_mail;?></td>
         <td><?php echo $signup->gender;?></td>
         <td><?php echo $signup->division;?></td>
         <td><a href="<?php echo site_url(); ?>/dashboard_con/user_delete/?var1=<?php echo $u_id; ?>&var2=<?php echo $u_mail; ?>">Delete</a></td>	
     	</tr>
     	<?php 
         	}
      }
     	?>
     </tbody>
   	
   </table>

  
    </div>
          


      
