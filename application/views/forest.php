<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/forest.css">
    <title>Forest Page</title>
    <!-- Text reference: 
    “Indie Flower - Kimberly Geswein“.[Online].Available:
	https://fonts.google.com/specimen/Indie+Flower#standard-styles
	-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
   
</head>

<!-- Image Reference:
"Detailed jungle background", Freepik. [Online]. Available: https://www.freepik.com/free-vector/detailed-jungle-background_13900089.htm#page=1&query=forest&position=19&from_view=search.
-->
<body background="<?php echo base_url(); ?>images/forest.png">
<?php echo form_open(base_url().'forest'); ?>
<audio src="<?php echo base_url(); ?>bgmusic/forest.mp3" autoplay="autoplay" loop="loop"
       preload="auto"></audio>
    <!-- Audio Reference:
    "In The Jungle - Electronic Adventure Music". [Online]. Available: https://pixabay.com/music/mystery-in-the-jungle-electronic-adventure-music-7659/.
    -->   

    <section id="gamePlay">
        <!--gamebox-->
        <div id="findModal" class="modal">
            <div class="close">
                <span id="closeiconfind">&times;</span>
            </div>
            <div id="instruction">
                <h1>You have found a plant!</h1>
                <h2>Let’s take a look at the secrets of the plant!</h2>            
            </div>
            <button type="button" class="button" id="goToGameButton">VIEW</button>
        </div>
    
    </section>

    <div id="back-room-icon">
    <a href="<?php echo base_url();?>room">
            <!-- Image Reference:
            "Environment icon design elements set", Freepik. [Online]. Available: https://www.freepik.com/free-vector/environment-icon-design-elements-set_13312208.htm.
            -->
            <img src="<?php echo base_url(); ?>images/home icon.png" alt="Back Room">
        </a>
    </div>
    <!-- Image Reference:
    "Pack of different trees with fruits", Freepik. [Online]. Available: https://www.freepik.com/free-vector/pack-different-trees-with-fruits_925586.htm#page=1&query=tree&position=3&from_view=search.
    "-->
    <div id="plant2"><img src="<?php echo base_url(); ?>images/20211025012311.png" alt="plant icon"></div>
    <div id="plant3"><img src="<?php echo base_url(); ?>images/20211025012311.png" alt="plant icon"></div>
    <div id="plant4"><img src="<?php echo base_url(); ?>images/20211025012311.png" alt="plant icon"></div>

    <div id="inforModal" class="infor">
        <div class="close">
            <span id="closeiconinfo">&times;</span>
        </div>
        <section class="records"></section>
        <div id="playGameModal">
            <div id="playGame">Play a game to cultivate it</div>
            <button type="button" id="startButton">START</button>
        </div>
    
    </div>
    <h2 id="notice">Click on the plant icons to discover on plants</h2>

    <div id="soilModal" class="modal">
        <div class="close">
            <span id="closeiconsoil">&times;</span>
        </div>
        <p>Select the type of soil the plant needs</p>
        <div id="sandselections">
            <div id="SandOption" class="selection">
                <div class="img-frame">
                    <!-- Image Reference:
                    S. Viktor, "Photo of Vast Sand", Pexels. [Online]. Available: https://www.pexels.com/photo/photo-of-vast-sand-3227987/.
                    -->
                    <img src="<?php echo base_url(); ?>images/sand soil.png" alt="sand soil">
                </div>
                <!-- <label><input type="radio" name="test" /><span>Sand</span></label> -->
                <input id="Sand" type="button" value="Sand">
            </div>
    
            <div id="LoamOption" class="selection">
                <div class="img-frame">
                    <!-- Image Reference:
                    "Close up of fertile loam soil", Vecteezy. [Online]. Available: https://www.vecteezy.com/photo/1254579-close-up-of-fertile-loam-soil.
                    -->
                    <img src="<?php echo base_url(); ?>images/loam soil.png" alt="loam soil">
                </div>
                <!-- <label><input type="radio" name="test" /><span>Loam</span></label> -->
                <input id="Loam" type="button" value="Loam">
            </div>
    
            <div id="ClayOption" class="selection">
                <div class="img-frame">
                    <!-- Image Reference:
                    M. Bos, "Photo by Mike van den Bos on Unsplash", Unsplash.com, 2021. [Online]. Available: https://unsplash.com/photos/wU8R1uGd6E0.
                    -->
                    <img src="<?php echo base_url(); ?>images/clay soil.png" alt="clay soil">
                </div>
                <!-- <label><input type="radio" name="test" /><span>Clay</span></label> -->
                <input id="Clay" type="button" value="Clay">
            </div>
    
            <div id="CompostOption" class="selection">
                <div class="img-frame">
                    <!-- Image Reference:
                    "Persons Hand on Brown Soil", Pexels. [Online]. Available: https://www.pexels.com/photo/persons-hand-on-brown-soil-7782161/.
                    -->
                    <img src="<?php echo base_url(); ?>images/compost soil.png" alt="compost soil">
                </div>
                <input id="Compost" type="button" value="Compost">
            </div>
        </div>
        <div id="soilhintModal">
            <p id="soilhinttext"></p>
            <img src="<?php echo base_url(); ?>images/hint.png" alt="hint icon" id="soilhinticon">
        </div>
    
    </div>
    
    <div id="waterModal" class="modal">
        <div class="close">
            <span id="closeiconwater">&times;</span>
        </div>
        <p>Select how much water the plant needs</p >
        <!-- Image Reference:
            "Grow Up Plant Icon Vector", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/117894-grow-up-plant-icon-vector
           -->
        <div id="waterselections">
            <div id="100 ">
                <div class="water-img-frame"><img src="<?php echo base_url(); ?>images/water%20icon1.png"
                                            alt="100 to 600mm"></div>
                <input type="button" value="100 to 600mm"  id="100 to 600mm"/>
            </div>
    
            <div id="600 ">
                <div class="water-img-frame"><img src="<?php echo base_url(); ?>images/water%20icon2.png"
                                            alt="600 to 1400mm"></div>
                <input type="button" value="600 to 1400mm" id="600 to 1400mm"/>
            </div>
    
            <div id="1400">
                <div class="water-img-frame"><img src="<?php echo base_url(); ?>images/water%20icon3.png"
                                            alt="1400 to 2500mm"></div>
                <input type="button" value="1400 to 2500mm"  id="1400 to 2500mm"/>
            </div>
    
            <div id="2500">
                <div class="water-img-frame"><img src="<?php echo base_url(); ?>images/water%20icon4.png"
                                            alt="2500mm or more"></div>
                <input type="button" value="2500mm or more" id="2500mm or more"/>
            </div>
        </div>
        <div id="waterhintModal">
            <p id="waterhinttext"></p>
            <img src="<?php echo base_url(); ?>images/hint.png" alt="hint icon" id="waterhinticon">
        </div>
    
    
    </div>
    
    <div id="sunModal" class="modal">
        <div class="close">
            <span id="closeiconsun">&times;</span>
        </div>
        <p>Select how much sunlight the plant needs</p>
        <!-- Image Reference:
            "Coloured weather icons collection", Freepik. [Online]. Available: https://www.freepik.com/free-vector/coloured-weather-icons-collection_895655.htm.
          -->
        <div id="sunselections">
            <div class="selection" id="shade-option">
                <div class="sun-img-frame"><img src="<?php echo base_url(); ?>images/sunlight1.png" alt="shade"></div>
                <input type="button" id="shade" value="shade"/>
            </div>
    
            <div class="selection" id="semi-shade-option">
                <div class="sun-img-frame"><img src="<?php echo base_url(); ?>images/sunlight2.png" alt="Semi-shade"></div>
                <input type="button" id="semi-shade" value="semi-shade" />
            </div>
    
            <div class="selection" id="sun-option">
                <div class="sun-img-frame"><img src="<?php echo base_url(); ?>images/sunlight3.png" alt="Sun"></div>
                <input type="button" id="sun" value="sun"/>
            </div>
        </div>
        <div id="sunhintModal">
            <p id="sunhinttext"></p>
            <img src="<?php echo base_url(); ?>images/hint.png" alt="hint icon" id="sunhinticon">
        </div>
    
    </div>
    
    <div id="heightModal" class="modal">
        <div class="close">
            <span id="closeiconheight">&times;</span>
        </div>
        <p>Select the plant height</p >
        <!-- Image Reference:
            "Free Grow Up Plant Icons", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/120152-free-grow-up-plant-icons.
        -->
        <div id="heightselections">
            <div id="0">
                <div class="height-img-frame"><img src="<?php echo base_url(); ?>images/height1.png"
                                            alt="0 to 1m"></div>
                <input type="button" value="0 to 1m"  id="0 to 1m"/>
            </div>
    
            <div id="1">
                <div class="height-img-frame"><img src="<?php echo base_url(); ?>images/height2.png"
                                            alt="1 to 5m"></div>
                <input type="button" value="1 to 5m" id="1 to 5m"/>
            </div>
    
            <div id="5">
                <div class="height-img-frame"><img src="<?php echo base_url(); ?>images/height3.png"
                                            alt="5 to 8m"></div>
                <input type="button" value="5 to 8m"  id="5 to 8m"/>
            </div>
    
            <div id="8">
                <div class="height-img-frame"><img src="<?php echo base_url(); ?>images/height4.png"
                                            alt="8 to 15m"></div>
                <input type="button" value="8 to 15m" id="8 to 15m"/>
            </div>
        </div>
        <div id="heighthintModal">
            <p id="heighthinttext"></p>
            <img src="<?php echo base_url(); ?>images/hint.png" alt="hint icon" id="heighthinticon">
        </div>
    
    </div>

    <div id="failModal"  class="fail">
        <div class="close">
            <span id="closeiconfail">&times;</span>
        </div>
        <h1>You failed!</h1>
        <!-- Image Reference:
        "The illustration of crying plant pot cute baby", Vecteezy. [Online]. Available: https://www.vecteezy.com/vector-art/3453242-the-illustration-of-crying-plant-pot-cute-baby
        -->
        <img src="<?php echo base_url(); ?>images/crying plant.png">
        <div>
            <input type="button" value="Back To Forest" id="tryagain"/>
        </div>
    </div>

    <div id="conModal"  class="congratulation">
  
        <div class="close">
            <span id="closeiconcong">&times;</span>
        </div>
        <h1>Congratulations!</h1>
        <p id="congratulationtext">The Abelia has been cultivated successfully</p>
        <!-- Image Reference:
        "Linnaea chinensis - Wikipedia", En.wikipedia.org. [Online]. Available: https://en.wikipedia.org/wiki/Linnaea_chinensis.
        -->
        
        <img src="<?php echo base_url(); ?>images/badge tree.png">
        
        <div id="susbutton">
            <a href="<?php echo base_url();?>badge/updategotobadgepageforest"><input type="button" value="View badges" id="conbutton"/></a>
            <a href="<?php echo base_url();?>badge/updateforestbadge"><input type="button" value="Back to the forest" id="conbutton"/></a>
    </div>
    </div>

  
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ForestPage.js"></script>
</html>