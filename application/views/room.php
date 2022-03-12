<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/room.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <title>Plants</title>
</head>

<!-- Image Reference:
"Old luxury living room interior with fireplace", Freepik. [Online]. Available: https://www.freepik.com/free-vector/interior-victorian-living-room_8924525.htm#page=1&query=Interior%20of%20victorian%20living%20room&position=1&from_view=search.
-->
<body background="<?php echo base_url(); ?>images/room without furniture.png">
   <?php echo form_open(base_url().'room'); ?>
   <!-- audio Reference
   "Buddy | Happy Royalty Free Music - Kids", Bensound.com. [Online]. Available: https://www.bensound.com/royalty-free-music/track/buddy.
   -->
   <audio src="<?php echo base_url(); ?>bgmusic/room.mp3" autoplay="autoplay" loop="loop"
       preload="auto"></audio>
    <div>
        <a href="<?php echo base_url();?>garden">
            <!-- Image Reference:
            "House hallway entrance interior with furniture", Freepik. [Online]. Available: https://www.freepik.com/free-vector/house-hallway-entrance-interior-with-furniture_4758478.htm.
            -->
            <img data-toggle="tooltip" data-placement="right" src="<?php echo base_url(); ?>images/room door.png" id="door_icon" title="LET'S GO TO GARDEN!">
        </a>
    </div>

    <div>
        <a href="<?php echo base_url();?>pond">
            <!-- Image Reference:
            "Swamp with boat and water lily leaves", Freepik. [Online]. Available: https://www.freepik.com/free-vector/swamp-with-boat-water-lily-leaves_11296949.htm#page=1&query=pond&position=11&from_view=author.
            -->
            <img src="<?php echo base_url(); ?>images/room painting.png" background-color="red" id="painting_icon" data-toggle="tooltip" data-placement="bottom" title="LET'S GO TO POND!">
        </a>
    </div>

    <div>
        <a href="<?php echo base_url();?>forest">
            <!-- Image Reference:
            "Beautiful scene from living room in house, looked through glass window and saw nature park outside, vector", Freepik. [Online]. Available: https://www.freepik.com/free-vector/beautiful-scene-from-living-room-house-looked-through-glass-window-saw-nature-park-outside-vector_17629509.htm#page=1&query=room&position=18&from_view=search.
            -->
            <img src="<?php echo base_url(); ?>images/room win.png" id="window_icon" data-toggle="tooltip" data-placement="left" title="LET'S GO TO FOREST!">
        </a>
    </div>

    

    <div>
        <a href="<?php echo base_url();?>badge">
            <!-- Image Reference:
            "Old luxury living room interior with fireplace", Freepik. [Online]. Available: https://www.freepik.com/free-vector/interior-victorian-living-room_8924525.htm#page=1&query=Interior%20of%20victorian%20living%20room&position=1&from_view=search.
            -->
            <img src="<?php echo base_url(); ?>images/room badge.png" id="badge_icon" data-toggle="tooltip" data-placement="left" title="CHECK YOUR BADGE!">
        </a>
    </div>

    <div>
        <a href="<?php echo base_url();?>aboutus">
        <img src="<?php echo base_url(); ?>images/aboutus.png"  id="aboutus">
       </a>
    </div>

    <div>
        <a href="<?php echo base_url();?>aboutpage">
        <img src="<?php echo base_url(); ?>images/aboutpage.png"  id="aboutpage">
       </a>
    </div>



    <div>
        

        <?php if(!$this->session->userdata('logged_in')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>login"> 
            <!-- Image Reference:
            "Houseplant collection", Freepik. [Online]. Available: https://www.freepik.com/free-vector/houseplant-collection_13294467.htm#page=1&query=plant&position=31&from_view=search
             -->
            <img src="<?php echo base_url(); ?>images/Log in.png"  id="login_icon" data-toggle="tooltip" data-placement="left" title="Click me TO LOGIN">
            </a>
          </li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
            <a href="<?php echo base_url(); ?>login/logout"> 
            <!-- Image Reference:
            "Houseplant collection", Freepik. [Online]. Available: https://www.freepik.com/free-vector/houseplant-collection_13294467.htm#page=1&query=plant&position=31&from_view=search
             -->
            <img src="<?php echo base_url(); ?>images/Not log in.png"  id="login_icon" data-toggle="tooltip" data-placement="left" title="Check your badge now!">
            </a>
           </li>
           <?php endif; ?>
            <!-- Image Reference:
            "Old luxury living room interior with fireplace", Freepik. [Online]. Available: https://www.freepik.com/free-vector/interior-victorian-living-room_8924525.htm#page=1&query=Interior%20of%20victorian%20living%20room&position=1&from_view=search.
            -->
            
    </div>

    


    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>