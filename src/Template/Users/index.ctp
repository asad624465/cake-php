<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>First Project</title>
  </head>
  <body>
    <div class="container">
    	<div class="row mt-5">
    		<div class="col-md-12">
    			<div class="card">
			  <div class="card-header d-flex align-item-center justify-content-between">
			    User list
			    <a href="<?php echo $this->Url->build(['action'=>'add'])?>" class="btn btn-primary btn-sm">Add new user</a>
			  </div>
			  <div class="card-body">
			    <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">User Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Address</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php if($users && !empty($users))
				  		{
				  			foreach($users  as $user){
				  	?>
				    <tr>
				      <td><?php echo $user->name;?></td>
				      <td><?php echo $user->email;?></td>
				      <td><?php echo $user->address;?></td>
				      <td><?php echo $user->phone;?></td>
				      <td><?php echo $this->Html->link('Edit',['action'=>'edit',$user->id],['class'=>'btn btn-info btn-sm'])?> <?php echo $this->Form->postLink('Delete',['action'=>'delete',$user->id],['class'=>'btn btn-danger btn-sm'],['confirm'=>'Are you sure to delete this? # {0}',$user->id]);?></td>
				    </tr>
				<?php }}?>
				  </tbody>
				</table>
			  </div>
			</div>	
    		</div>
    	</div>
    </div>
    	
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>