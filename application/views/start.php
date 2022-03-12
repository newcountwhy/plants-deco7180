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
    <title>Plants</title>
    <script>
        console.log('test');
        var width = window.innerWidth;
        if (width < 1024) {
        //alert("error")
        window.location.href="<?php echo base_url();?>error";
        //window.location.href="https://www.baidu.com"
        }
    </script>
</head>

<body>
<?php echo form_open(base_url().'index'); ?>
<a href="<?php echo base_url();?>intro1">
    <!-- Image Reference: 
    F. Ramadhan, "Nature Spring Landscape Free Vector", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/2072951-nature-spring-landscape.
    -->
    <img src="<?php echo base_url(); ?>images/homepage bg.png" alt="Click to begain" class="background">
    </a>
</body>

<script src="<?php echo base_url(); ?>assets/js/start.js"></script>

</html>