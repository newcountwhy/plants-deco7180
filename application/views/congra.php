<div class="container">
  
    <p>
		 <a href="<?php echo base_url();?>'badge/gardenbadge'"> collect garden badge</a>
    </p> 
    <p>
		 <a href="<?php echo base_url();?>'badge/waterbadge'"> collect water badge</a>
    </p> 
    <p>
		 <a href="<?php echo base_url();?>'badge/forestbadge'"> collect forest badge</a>
    </p> 
show


<form>
<?php
  $i=1;
  foreach($data as $row)
  
  echo "
  
  <p>Username: $row->username</p>
  <p>1: $row->water_number</p>
  <p>2: $row->garden_number</p>
  <p>3: $row->forest_number</p>
  
  
  
  ";
  
  $i++;
  ?>

<a href="<?php echo base_url();?>badge/updatedata">check count</a>

<?php echo form_close(); ?>
</form>
</div>