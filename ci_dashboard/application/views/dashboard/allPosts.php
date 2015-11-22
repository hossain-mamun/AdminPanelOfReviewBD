<div>
<h4>Here is the all posts!</h4>
<table class="table table-bordered table-striped table-hover">
    <thead>
     <tr>
      <th>User-Name</th>
      <th>Email</th>
      <th>Post_Title</th>
      <th>Post</th>
      <th>Like</th>
      <th>Dislike</th>
      <th>Reported</th>
      <th>Action</th>
    			
    		
    </tr>
    </thead>
    <tbody>
     <?php 
      if ($allUserPost) {
      	foreach ($allUserPost as $Posts) {
      		$post_id=$Posts->post_id;
          $post_name = $Posts->name;
          $post_email=$Posts->email;
          $post_title=$Posts->post_title;
          $post_content=$Posts->post;
          $post_like=$Posts->l_like;
          $post_dislike=$Posts->dislike;
          $post_report=$Posts->reported;


     ?>
     	<tr id="<?php echo $post_id;?>">
         <td><?php echo $post_name;?></td>	
         <td><?php echo $post_email;?></td>
         <td><?php echo $post_title;?></td>
         <td><?php echo substr($post_content,0,400);?></td>
         <td><?php echo $post_like;?></td>
         <td><?php echo $post_dislike;?></td>
         <td class="report"><?php echo $post_report;?></td>
         <td><a href="<?php echo site_url(); ?>/dashboard_con/post_delete/<?php echo $post_id;?> ">Delete</a></td>	
     	</tr>
     	<?php 
         	}
      }
     	?>
     </tbody>
   	
   </table>
</div>