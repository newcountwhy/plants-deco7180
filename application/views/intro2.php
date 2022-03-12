<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>
    <title>Plants introduction</title>
</head>

<body>
<?php echo form_open(base_url().'intro2'); ?>
<!-- audio Reference
"Buddy | Happy Royalty Free Music - Kids", Bensound.com. [Online]. Available: https://www.bensound.com/royalty-free-music/track/buddy.
-->
<audio src="<?php echo base_url(); ?>bgmusic/room.mp3" autoplay="autoplay" loop="loop"
       preload="auto"></audio>
<a href="<?php echo base_url();?>room">
<!-- Image Reference: 
    "Houseplant collection", Freepik. [Online]. Available: https://www.freepik.com/free-vector/houseplant-collection_13294467.htm#page=1&query=plant&position=31&from_view=search.
    "Old luxury living room interior with fireplace", Freepik. [Online]. Available: https://www.freepik.com/free-vector/interior-victorian-living-room_8924525.htm#page=1&query=Interior%20of%20victorian%20living%20room&position=1&from_view=search.
    -->
    <img src="<?php echo base_url(); ?>images/information2.jpg" alt="Click to begain" class="background">
    </a>
</body>

</html>