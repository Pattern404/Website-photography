<!DOCTYPE html>
<html>
<head>


    <?php 
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],”iPhone”);
$android = strpos($_SERVER['HTTP_USER_AGENT'],”Android”); 
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],”webOS”);
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],”iPod”); 
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($iphone) { ?>
    <link rel="stylesheet" type="text/css" href="style_ios.css">
<?php }  else if ($iPad) {  ?> <link rel="stylesheet" type="text/css" href="style_ios.css"> <?php }
        else { ?>
    <link rel="stylesheet" type="text/css" href="style.css">
<?php } ?>


    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta property="og:image" content="Images/thumb.jpg" /> 
    <title>Fotowizard Bulgaria</title>


</head>
<body>

    <div class="pimg1">
  
</div>

<div class="pimg1-mob">

</div>


<section class="section-light">
    <a href="indexbg.html"><img src="Images/bulgaria.png" class="icon"></a>
    <h1>Welcome to Fotowizard Bulgaria</h1>
    <p>If you keep scrolling you'll find more of my pictures, contacts and prices.</p>
</section>


<div class="pimg2">
  
</div>


<div class="pimg2-mob">
  
</div>

<section class="section-dark">
    <h1 style="text-align: center;">If you wish to see more of my photos...</h1>
    <p style="text-align: center;">This link will take you to my Flickr gallery where you can view all my photos in full quality.</p>
    <a href="https://www.flickr.com/photos/187323941@N04/" class="myButton" target="_blank">View my photos</a>
    

</section>




<div class="pimg3">
 
</div>


<div class="pimg3-mob">
 
</div>


<section class="section-dark">
    <h1>If you want your own photoshoot...</h1>
    <p>You can find more information about me, my contact info and pricing below.
    </br>
    </p>
    <a href="aboutme.html" class="myButton" >Contacts</a>
    <a href="prices.html" class="myButton" >Prices</a>
</section>


</body>
</html>