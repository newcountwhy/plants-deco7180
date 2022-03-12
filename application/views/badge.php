<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/badge.css">
    <title>Badge</title>
</head>

<body background="<?php echo base_url(); ?>images/badge bg.png">
        <!-- Image Reference:
          "Flat Design Vector Spring Landscape Design", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/183659-flat-design-vector-spring-landscape-design.
         -->
<?php echo form_open(base_url().'badge/dispdata'); ?>

<div>
<!--back to room-->
  <div id="back-room-icon">
      <a href="<?php echo base_url();?>room">
          <!-- Image Reference:
          "Environment icon design elements set", Freepik. [Online]. Available: https://www.freepik.com/free-vector/environment-icon-design-elements-set_13312208.htm.
          -->
          <img src="<?php echo base_url(); ?>images/home icon.png" alt="Back Room">
      </a>
  </div>

  <h1>My Badges</h1>

  <div class="rankingcon">
      <a href="<?php echo base_url();?>ranking">
      <button class="gotoranking" type="button">Ranking</button>
      </a>
  </div>


<!--badge and text-->

  <div class="badgetype">

    <div class="badgecon"> 

          <div class="badge_image" id="flower-image">
          <img src="<?php echo base_url(); ?>images/badge flower.png">
          </div> 
          
          <h2 class='badgenumber"' id='flower'>
          <?php
          $i=1;
          foreach($data as $row)
          echo "          
          $row->garden_number 
          ";
          $i++;
          ?>
          </h2>
    </div>

    <div class="badgecon"> 
          <div class="badge_image">
          <img src="<?php echo base_url(); ?>images/badge shrub.png">
          </div> 
          <h2 class="badgenumber" id="water">
          <?php
          $i=1;
          foreach($data as $row)

          echo "
          $row->water_number 
          ";

          $i++;                   
          ?>
          </h2>
    </div>

    <div class="badgecon">
        <div class="badge_image">
        <img src="<?php echo base_url(); ?>images/badge tree.png">
        </div>

        <h2 class="badgenumber" id="forest">
        <?php
          $i=1;
          foreach($data as $row)
          
          echo "
          $row->forest_number 
          ";
          
          $i++;
          ?>
        </h2>
    </div>
  </div>   


  <div class="totalbadge">
      <h2 class="badgenumber">
      <?php
        $i=1;
        foreach($data as $row)
        
        echo "
        Total badges: $row->totalbadge
        ";
        
        $i++;
        ?>
      </h2>

  </div>


</div>
<?php echo form_close(); ?>

</body>
</html>