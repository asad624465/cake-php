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
			   Edit user
			    <a href="<?php echo $this->Url->build(['action'=>'index'])?>" class="btn btn-primary btn-sm">Back to user list</a>
			  </div>
			  <div class="card-body">
			    <?php echo $this->Form->create($user);?>
				  <?php echo $this->Form->input('name',['class'=>'form-control','type'=>'text','placeholder'=>'user name']);?>
				  <?php echo $this->Form->input('email',['class'=>'form-control','type'=>'email','placeholder'=>'Enter your email']);?>
				  <?php echo $this->Form->input('phone',['class'=>'form-control','type'=>'text','placeholder'=>'Phone number']);?>
				   <?php echo $this->Form->input('address',['class'=>'form-control','type'=>'text','placeholder'=>'Enter your address']);?>
				  <?php echo $this->Form->submit('Update record',['class'=>'btn btn-info']);?>
				<?php echo $this->Form->end();?>
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