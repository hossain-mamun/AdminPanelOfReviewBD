<div>
<h4>Here are the all Comments</h4>

<table class="table bordered table-bordered table-striped table-hover">
    <thead>
     <tr>
      <th>User-Name</th>
      <th>Email</th>
      <th>Comment</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php 
      if ($allUserComment) {
      	foreach ($allUserComment as $signup) {
      		
      

     ?>
     	<tr id="<?php echo $signup->comment_id;?>">
         <td><?php echo $signup->name;?></td>
         <td><?php echo $signup->mail;?></td>	
         <td><?php echo $signup->comments;?></td>
         
         
         <td><a href="<?php echo site_url(); ?>/dashboard_con/comment_delete/<?php echo $signup->comment_id;?> ">Delete</a></td>	
     	</tr>
     	<?php 
         	}
      }
     	?>
     </tbody>
   	
   </table>
</div>