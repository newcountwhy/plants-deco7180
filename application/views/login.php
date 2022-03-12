<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GardenGame Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
    <!-- Text reference: 
    “Indie Flower - Kimberly Geswein“.[Online].Available:
	https://fonts.google.com/specimen/Indie+Flower#standard-styles
	-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
	

</head>
<body background="<?php echo base_url(); ?>images/badge bg.png">
        <!-- Image Reference:
          "Flat Design Vector Spring Landscape Design", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/183659-flat-design-vector-spring-landscape-design.
         -->

<div>
    <div id="back-room-icon">
      <a href="<?php echo base_url();?>room">
          <!-- Image Reference:
          "Environment icon design elements set", Freepik. [Online]. Available: https://www.freepik.com/free-vector/environment-icon-design-elements-set_13312208.htm.
          -->
          <img src="<?php echo base_url(); ?>images/home icon.png" alt="Back Room">
      </a>
    </div>

    <div class="container">
        <div class="col-4 offset-4">
			<?php echo form_open(base_url().'login/check_login'); ?>
				    <h2 class="input_group" id="text_center">Login</h2>       
					<div class="input_group">
						<input type="text" class="form-control" placeholder="Username" required="required" name="username">
					</div>
					<div class="input_group">
						<input type="password" class="form-control" placeholder="Password" required="required" name="password">
					</div>
					<div class="input_group">
					<?php echo $error; ?>
					</div>
					<div class="input_group" id="loginframe">
					<a href="<?php echo base_url();?>badge"><button type="submit" id="loginbutton">Log in</button></a>
					</div>
					<div class="clearfix">
						<label class="float-left form-check-label"><input type="checkbox" name="remember"><h3>Remember me</h3> </label>
				
					</div>    
					<div class="clearfix">
					<h3>
					    <a href="<?php echo base_url();?>reg"> Go to register page</a>
					</h3> 
				
					</div>  
			<?php echo form_close(); ?>
	    </div>
    </div>

</div>

</body>

</html>