
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ranking.css">
    <title>Ranking</title>
</head>

<body background="<?php echo base_url(); ?>images/badge bg.png" opacity: 30%;>
<?php echo form_open(base_url().'ranking'); ?>
<div id="whole">
<div id="title_icon">
<!--back to room-->
<div id="back-room-icon">
<a href="<?php echo base_url();?>room">
        <!-- Image Reference:
        "Environment icon design elements set", Freepik. [Online]. Available: https://www.freepik.com/free-vector/environment-icon-design-elements-set_13312208.htm.
        -->
        <img src="<?php echo base_url(); ?>images/home icon.png" alt="Back Room">
    </a>
</div>

<h1>Badges ranking</h1>

</div>

<!--1st 2nd-->
<div id="showlist">
<section class="col" id="order">
<h2>1st</h2>
<h2>2nd</h2>
<h2>3rd</h2>
<h2>4th</h2>
<h2>5th</h2>
<h2>6th</h2>
<h2>7th</h2>
<h2>8th</h2>
<h2>9th</h2>
<h2>10th</h2>
</section>

<!--name-->
<section class="col">
<h3>Name</h3>

<?php
  $i=1;
  foreach($data as $row)
  echo "
  <h4>$row->username<h4>
  
  ";
  
  $i++;
  ?>


</section>

<!--flower-->
<section class="col">
<div class="image-frame">
<img src="<?php echo base_url(); ?>images/badge flower.png">
</div>

<?php
  $i=1;
  foreach($data as $row)
  
  echo "
  <h5>$row->garden_number</h5>

  ";
  
  $i++;
  ?>
  
</section>

<!--water-->
<section class="col">
<div class="image-frame">
<img src="<?php echo base_url(); ?>images/badge shrub.png">
</div>

<?php
  $i=1;
  foreach($data as $row)
  
  echo "
  <h5>$row->water_number</h5>

  ";
  
  $i++;
  ?>
  
</section>

<!--forest-->
<section class="col">
<div class="image-frame">
<img src="<?php echo base_url(); ?>images/badge tree.png">
</div>

<?php
  $i=1;
  foreach($data as $row)
  
  echo "
  <h5>$row->forest_number</h5>

  ";
  
  $i++;
  ?>
  
</section>

<!--Overall-->
<section class="col">
<h3>Overall</h3>


<?php
  $i=1;
  foreach($data as $row)
  
  echo "
  <h5>$row->totalbadge</h5>

  ";
  $i++;
  ?>
  </section>
  
</div>

<div id="back">
<a href="<?php echo base_url();?>badge">
<button class="backbutton" type="button">Back</button>
</a>
</div>

</div>

</body>
</html>
