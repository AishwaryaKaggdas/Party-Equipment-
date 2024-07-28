<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" > 
       <script src="scripts/part2.js"></script>  
       <script src="scripts/enhancements.js"></script>      
       <title>ENQUIRY PAGE</title>
</head>
<body id="enquirypage">
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>

  
<div class="background3">
  <h1 id="feedback">General Enquiry Form</h1>
<form id= "form1" method="post" action="payment.php" novalidate="novalidate">
  <fieldset class="formfieldset">
   <legend> Enquiry Details</legend>
   <p><label for="username">* First Name </label>
   <input type="text" name="username" class="fieldbox" maxlength="26" size="23" id="username" required="required" pattern="^[a-zA-Z]+$" autofocus />
 </p>
 <P><label for="lastname"> * Last Name </label>
  <input type="text" name="lastname" class="fieldbox" maxlength="26" size="23" id="lastname" required="required" pattern="^[a-zA-Z]+$"/>
</p>
<p><label for="emailid"> * Email ID </label>
  <input type="email" name="emailid" class="fieldbox" size="23" placeholder="name@domain.com" id="emailid" required="required"/>
</p>
</fieldset>
<fieldset class="formfieldset">
  <legend> Personal Details </legend>
  <h3 class="feedback"> Fill in Your Current Address</h3>
  <p><label for= "streetaddress"> * Street Address </label>
  <input type="text" name="streetaddress" class="fieldbox" maxlength="42" size="25" id="streetaddress" required="required" />
  </p>
  <p><label for= "suburb"> * Suburb/Town </label>
  <input type="text" name="suburb" class="fieldbox" maxlength="22" size="20" id="suburb" required="required" />
  </p>
   <label for="state">Choose a state:</label>

<select name="state" id="state">
<option value="select an option">Select an option</option>
  <option value="VIC">VIC</option>
  <option value="NSW">NSW</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="WA">WA</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
  <option value="ACT">ACT</option>
</select> 
  <p><label for="postcode"> * Postcode </label>
    <input type="text" name="postcode" class="fieldbox" minlength="4" maxlength="4" size="20" id="postcode" pattern= "\d{4}" required="required" />
  </p></fieldset>


  <fieldset class="formfieldset">
  <legend> Contact Details </legend>
  <p><label for="mobileno"> * Mobile No </label>
    <input type="text" name="mobileno" class="fieldbox"  maxlength="12" size="20" id="mobileno"  pattern="[0-9]{10}" required="required" placeholder="0451722409"/>
</p>
<p><strong> Preferred Contact : </strong>
  <label id="idradiobutton" >
    <input type="radio" name="pcontact" value="email" id="contact1"   />Email </label>
<label><input type="radio" name="pcontact" value="post" id="contact2" />Post</label>
<label><input type="radio" name="pcontact" value="phone" id="contact3" />Phone</label></p>
</fieldset>

   
<fieldset class="formfieldset">
  <legend>Product Enquiry</legend>

  <h4>SELECT THE PARTY EQUIPMENT/EQUIPMENTS </h4> 
 <select name="party" id="partye" >
   <option value="select an option" > Select an option</option>
      <option value="candles"> Candles </option>
      <option value="lights"> Lights </option>
      <option value="speakers"> Speakers </option>
      <option value="balloons"> Balloons</option>
      <option value="Confetti">Confetti </option>
  </select>    


 <h4> 1] SELECT THE CANDLE TYPE</h4>
<label><input type="checkbox" name="candle type[]" value="Soy Wax candles"  id="candletype1"/>Soy wax candles</label>
<label><input type="checkbox" name="candle type[]" value="Paraffin Wax candles" id="candletype2" />Paraffin wax candles</label>
<label><input type="checkbox" name="candle type[]" value="Beeswax candles" id="candletype3" />Beeswax candles</label>  



<h4> 2] SELECT THE BALLOON TYPE </h4>
<label><input type="checkbox" name="Balloon type[]" value="Latex Balloon"   id="balloontype1"/>Latex balloons</label>
<label><input type="checkbox" name="Balloon type[]" value="Foil balloon" id="balloontype2" />Foil balloons</label>
<label><input type="checkbox" name="Balloon type[]" value="Cloud-Buster balloon" id="balloontype3"/>Cloud-Buster Balloons</label>

  

<h4>3] SELECT THE SPEAKER TYPE </h4>
<label><input type="checkbox" name="Speaker type[]" value="Portable bluetooth Speaker"  id="speakertype1"/>Portable Bluetooth Speaker </label>
<label><input type="checkbox" name="Speaker type[]" value="Watt Speakers" id="speakertype2"/>Two 1000-WattSpeakers </label>
<label><input type="checkbox" name="Speaker type[]" value="Wireless Active PA System"  id="speakertype3"/>Wireless Active PA Speaker System</label> 



<h4>4] SELECT THE LIGHT TYPE </h4>
<label><input type="checkbox" name="Light type[]" value="colorful String"  id="lighttype1"/>Colorful String Lights </label>
<label><input type="checkbox" name="Light type[]" value="vintage String" id="lighttype2"/>Vintage String Lights</label>
<label><input type="checkbox" name="Light type[]" value="led Rope" id="lighttype3"/>Led Rope Lights</label> 




<h4>5] SELECT THE CONFETTI TYPE </h4>
<label><input type="checkbox" name="Confetti type[]" value="Metallic"  id="confettitype1"/>Mettalic  Confetti</label>
<label><input type="checkbox" name="Confetti type[]" value="Paper" id="confettitype2" /> Paper Confetti</label>
<label><input type="checkbox" name="Confetti type[]" value="Star Shaped" id="confettitype3"/> Star Shaped Confetti</label>


</fieldset>

<fieldset class = "formfieldset" >
	<legend>Price details and Quantity</legend>
	
	<h4>ENTER QUANTITY</h4>
<p> <label for = "CAN">CANDLES - RS 250 (Pack of 12)</label>
	<input type="text" class="fieldbox23" maxlength="3"  size="23" id="CAN"  />
</p>
<p><label for = "SPE">SPEAKERS - RS 2500 </label>
	<input type="text"  class="fieldbox23" maxlength="3"   size="23" id="SPE"  />
</p>
<p><label for = "CON">CONFETTI- RS 180 (Pack of 2)</label>
	<input type="text"  class="fieldbox23" maxlength="3"   size="23" id="CON"  />
</p>
<p><label for = "LIG">LIGHTS - RS 300 (6 inches)</label>
	<input type="text"  class="fieldbox23" maxlength="3"    size="23" id="LIG" />
</p>
<p><label for = "BAL">BALLOONS - RS 200 (Pack of 100)</label>
	<input type="text"  class="fieldbox23" maxlength="3"  size="23" id="BAL"  />
</p>

</fieldset>

<fieldset class="formfieldset">
  <legend>Product Queries</legend>
  <p><label>Query</label>
  <select name="complaints" id="complaints" required="required">
  <option value="" disabled selected>Select an Option</option>
<option value="moreinfo">More Info on Product Availabilities</option>
<option value="moreinfo2">More Info on Product Prices</option>
<option value="order">Error while ordering </option>
<option value="assistance">Need more assistance while Odering</option>
<option value="refund">Refund Amount for cancelled Orders </option>


</select>
</p>
<br>
<h4>FEEDBACK:</h4><br><textarea  id="comments" rows="10" cols="60" placeholder="Enter feedback"></textarea>
<br><br>
<input type= "submit" id="submit" value="Pay Now"/>
  <input type= "reset" id="reset" value="Reset"/>
</fieldset></form></div><br/><br/>

<?php

include_once("includes/footer.inc");
     
?>
      </body>
</html>
   
  




