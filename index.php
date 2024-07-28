<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" >  
       <title>HOME PAGE</title>
</head>
<body id="indexpage">
             
<?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>

  
  
<div  class= " background">
             <h1 id="heading">PARTY EQUIPMENTS</h1>
<div class ="container" >
  
               
             <img src="images/candles.jpg" alt="candles" title="candles"    id="candle" usemap="#workmap" />
             <map name="workmap" >
             <area shape="rect" coords="34,44,270,350" alt="candles"  href="product.html#pic4" /></map>
             <h2 ><strong><em>CANDLES</em></strong></h2>
             <br>
     
             <img src="images/fairylights.jpg" alt="lights" title="lights "  id="fairy" usemap="#workmap2" />
             <map name="workmap2" >
              <area shape="rect" coords="34,44,270,350" alt="lights" href="product.html#pic2" /></map>
             <h2 ><strong><em>LIGHTS</em></strong></h2><br>

              <img src="images/balloons1.jpg" alt="ballons" title="BALLOONS "  id="balloonimage" usemap="#workmap3" />
             <map name="workmap3" >/<area shape="rect" coords="34,44,270,350" alt="balloons" href="product.html#pic3" /></map>
          
              <h2 ><strong><em>BALLOONS</em></strong></h2><br>
    
             <img src="images/speakers.jpg" alt="speakers" title="speakers "  id="speaker" usemap="#workmap4" />
              <map name="workmap4" >/<area shape="rect" coords="34,44,270,350" alt="speakers" href="product.html#pic5" />
             </map>
             <h2 ><strong><em>SPEAKERS</em></strong></h2>
             <br>
     
             <img src="images/confetti.jpg" alt="confetti" title="confetti "  id="confetti"  usemap="#workmap5"/>
             <map name="workmap5" >/<area shape="rect" coords="34,44,270,350" alt="confetti" href="product.html#pic1" />
             </map>
             <h2 ><strong><em>CONFETTI</em></strong></h2>
             <br>
  </div>

 <div id="b1" >
      <p><em>A candle is an ignitable wick embedded in wax, or another flammable solid substance such as tallow, that provides light, and in some cases, a fragrance. </em></p>
  </div>
     
<div id="b2"  >
     <p><em>Fairy lights are small, coloured electric lights that are hung up as decorations, for example on a Christmas tree. </em></p>
</div>
<div id="b3">
     <p><em>Party balloons are mostly made of a natural latex tapped from rubber trees, and can be filled with air, helium, water, or any other suitable liquid or gas.</em></p>
</div>
<div id="b4">
   
     <p><em>A device that converts analog audio signals into the equivalent air vibrations in order to make audible sound. </em></p>
</div>
<div id="b5">
      
      <p><em>Confetti are small pieces or streamers of paper, mylar, or metallic material which are usually thrown at celebrations, especially parades and weddings.</em></p>
    </div>
</div>

<?php

include_once("includes/footer.inc");
     
?>


      </body>
</html>
   
  
   
