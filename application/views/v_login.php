<div class="row">
	<div class="col-md-6">
		<h4>Form Login</h4>
		<hr>
		<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
				
			<div class="form-group">
		    	<label for="Username">Username</label>    
		    	<input type="text" name="username" value="" class="form-control">
		  	</div>
		  	<div class="form-group">
		    	<label for="Password">Password</label>    
		    	<input type="password" name="password" value="" class="form-control">
		  	</div>
		  	<div class="form-group">
		    	<input type="submit" class="btn btn-primary" value="Login">
		  	</div>
		</form>
	</div>
</div>