<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GardenGame Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
    <!-- Text reference: -->
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
		    <form method="post" action="reg/reg">
				<h2 class="input_group" id="text_center">Register</h2>      
					<div class="input_group">
                        <lable>Username</label>
						<input type="text" class="form-control" placeholder="Username" required="required" name="username">
					</div>
					
					
					<div class="input_group">
                        <label>Password</label>
						<input type="password" class="form-control" placeholder="Password" required="required" name="password" >
					</div>
                
					
				
                    <div class="input_group">
                        <label>Confirm password</label>
						<input type="password" class="form-control" placeholder="password" required="required" name="password1">
					</div>

					<div class="input_group">
					    <label>description</label>
						<input type="text" class="form-control" placeholder="description" required="required" name="description">
					
					</div>
					<div class="input_group" id="loginframe">
                        <button type="submit" class="btn btn-primary btn-block" id="loginbutton" name="reg_user">Register now</button>
					</div>
					<p>
					    Already a member?<a href="<?php echo base_url();?>login"> Sign in </a>
					</p> 
			
	   </div>
</div>
</div>

</body>

</html>