<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" >
       <title>FIX ORDER  PAGE</title>
</head>
<body id="enquirypage">
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>

<div class="background3">


<?php
session_start();
if(isset($_SESSION['errMsg'])){
   $errMsg=$_SESSION['errMsg'];
   }
if(isset($_SESSION['Firstname'])){
   $firstname=$_SESSION['Firstname'];
   }

if(isset($_SESSION['Lastname'])){
   $lastname=$_SESSION['Lastname'];
   }

if(isset($_SESSION['Street'])){
   $street=$_SESSION['Street'];
   }

if(isset($_SESSION['Suburb'])){
   $suburb=$_SESSION['Suburb'];
   }

if(isset($_SESSION['State'])){
   $state=$_SESSION['State'];
   }

if(isset($_SESSION['Postcode'])){
   $postcode=$_SESSION['Postcode'];
   }


if(isset($_SESSION['EmailId'])){
   $email=$_SESSION['EmailId'];
   }

if(isset($_SESSION['MobileNumber'])){
   $mobile=$_SESSION['MobileNumber'];
   }

if(isset($_SESSION['PreferredContact'])){
   $precontact=$_SESSION['PreferredContact'];
   }

if(isset($_SESSION['NCandles'])){
   $quantity1=$_SESSION['NCandles'];
   }

if(isset($_SESSION['NSpeakers'])){
   $quantity2=$_SESSION['NSpeakers'];
   }

if(isset($_SESSION['NConfetti'])){
   $quantity3=$_SESSION['NConfetti'];
   }

if(isset($_SESSION['NLight'])){
   $quantity4=$_SESSION['NLight'];
   }

if(isset($_SESSION['NBalloon'])){
   $quantity5=$_SESSION['NBalloon'];
   }

if(isset($_SESSION['TotalCost'])){
   $totalcost=$_SESSION['TotalCost'];
   }

if(isset($_SESSION['Feedback'])){
   $feedback=$_SESSION['Feedback'];
   }   

       if($errMsg !=""){
echo "<p>$errMsg</p>";
                }
 else           {


                     
                      header("location:process_order.php");

 }               
       



?>


<form id= "form1" method="post" action="process_order.php" >
  <fieldset class="formfieldset">
   <legend> Enquiry Details</legend>
   <p><label for="username">* First Name </label>
   <input type="text" name="Firstname" class="fieldbox" maxlength="25" size="23" id="username" value="<?php echo $firstname;?>" />
 </p>

<P><label for="lastname"> * Last Name </label>
  <input type="text" name="Lastname" class="fieldbox" maxlength="25" size="23" id="lastname" value="<?php echo $firstname;?>"/>
</p>

<p><label for="emailid"> * Email ID </label>
  <input type="email" name="EmailId" class="fieldbox" size="23"  id="emailid" value="<?php echo $email;?>"/>
</p>

</fieldset>


<fieldset class="formfieldset">
  <legend> Personal Details </legend>
  <h3 class="feedback"> Fill in Your Current Address</h3>
  <p><label for= "streetaddress"> * Street Address </label>
  <input type="text" name="Street" class="fieldbox" maxlength="40" size="25" id="streetaddress" value="<?php echo $street;?>"/>
  </p>
  <p><label for= "Suburb"> * Suburb/Town </label>
  <input type="text" name="Suburb" class="fieldbox" maxlength="20" size="20" id="suburb" value="<?php echo $suburb;?>"/>
  </p>
   <label for="state">Choose a state:</label>

<select name="State" id="state">
<option value="select an option">Select an option</option>
  <option value="vic">VIC</option>
  <option value="nsq">NSW</option>
  <option value="qld">QLD</option>
  <option value="nt">NT</option>
  <option value="wa">WA</option>
  <option value="sa">SA</option>
  <option value="tas">TAS</option>
  <option value="act">ACT</option>
</select> 
  <p><label for="Postcode"> * Postcode </label>
    <input type="text" name="Postcode" class="fieldbox" minlength="4" maxlength="4" size="20" id="postcode"  value="<?php echo $postcode;?>"/>
  </p></fieldset>

<fieldset class="formfieldset">
  <legend> Contact Details </legend>
  <p><label for="MobileNumber"> * Mobile No </label>
    <input type="text" name="MobileNumber" class="fieldbox"  maxlength="10" size="20" id="mobileno" value="<?php echo $mobile;?>" />
</p>
<p><strong> Preferred Contact : </strong>
  <label id="idradiobutton" >
    <input type="radio" name="PreferredContact" value="email" id="contact1"   />Email </label>
     <?php  

      if(isset($_SESSION['PreferredContact'])&& $_SESSION
      ['PreferredContact'] == 'email'){
        echo 'checked';
   
   }
   ?>

  
  

<label><input type="radio" name="PreferredContact" value="post" id="contact2" />Post</label>
        <?php  

      if(isset($_SESSION['PreferredContact'])&& $_SESSION
      ['PreferredContact'] == 'post'){
        echo 'checked ';
   
   }
   ?>



<label><input type="radio" name="PreferredContact" value="phone" id="contact3" />Phone</label></p>

  <?php  

      if(isset($_SESSION['PreferredContact'])&& $_SESSION
      ['PreferredContact'] == 'phone'){
        echo 'checked';
   
   }
   ?>



</fieldset>



<fieldset class="formfieldset">
  <legend>Product Enquiry</legend>

  <h4>SELECT THE PARTY EQUIPMENT/EQUIPMENTS </h4> 
 <select name="partyequipment" id="partye" >
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
  <input type="text" class="fieldbox23" maxlength="3" name="NCandles" size="23" id="CAN"  value="<?php echo $quantity1;?>" />
</p>
<p><label for = "SPE">SPEAKERS - RS 2500 </label>
  <input type="text"  class="fieldbox23" maxlength="3"  name="NSpeakers" size="23" id="SPE"  value="<?php echo $quantity2;?>" />
</p>
<p><label for = "CON">CONFETTI- RS 180 (Pack of 2)</label>
  <input type="text"  class="fieldbox23" maxlength="3" name="NConfetti"  size="23" id="CON"  value="<?php echo $quantity3;?>" />
</p>
<p><label for = "LIG">LIGHTS - RS 300 (6 inches)</label>
  <input type="text"  class="fieldbox23" maxlength="3"   name="NLight" size="23" id="LIG"  value="<?php echo $quantity4;?>"/>
</p>
<p><label for = "BAL">BALLOONS - RS 200 (Pack of 100)</label>
  <input type="text"  class="fieldbox23" maxlength="3" name="NBalloon"  size="23" id="BAL"   value="<?php echo $quantity5;?>"/>
</p>

<p><label for = "totalcost"> * TOTAL COST [RUPESS] </label>
  <input type="text"  class="fieldbox" maxlength="3" name="TotalCost" size="23" id="totalcost"   value="<?php echo $totalcost;?>"/>
</p>

</fieldset>


<fieldset class="formfieldset">
  <legend>Product Queries</legend>
  <p><label>Query</label>
  <select name="Query" id="complaints" >
  <option value="" disabled selected>Select an Option</option>
<option value="moreinfo">More Info on Product Availabilities</option>
<option value="moreinfo2">More Info on Product Prices</option>
<option value="order">Error while ordering </option>
<option value="assistance">Need more assistance while Odering</option>
<option value="refund">Refund Amount for cancelled Orders </option>


</select>
</p>
<br>
<h4>FEEDBACK:</h4><br><textarea  id="comments" name="Feedback" rows="10" cols="60" value="<?php echo $feedback;?>" ></textarea>
<fieldset class = "formfieldset">
    <legend> Credit Card Details</legend>
   <p><label for= "CREDIT"> * Select Credit Card type </label>
    <select name="CREDIT" id="CREDIT"   >
      <option value="" disabled selected> Select an option</option>
      <option value="visa">VISA</option>
      <option value="mastercard">MASTERCARD</option>
      <option value="Americanexpress">AMERICAN EXPRESS</option>
    </select>
  </p>
  <p><label for="CREDIT"  > * Enter name on Credit card </label>
   <input type="text" name="CREDIT"  maxlength="40" size="23" id="Cname"  />
 </p>
 <p><label for="Cnumber"> * Enter Credit card number </label>
   <input type="text" name="Cnumber"   maxlength="16"   size="23" id="Cnumber"   />
 </p>
 <p><label for="Cexpiry"> * Enter Credit card expiry date </label>
   <input type="text" name="Cexpiry"   maxlength="5" size="23" id="Cexpiry"  />
 </p>

 <p><label for="CVV"> * Enter CVV number </label>
   <input type="text" name="CVV"  size="23" id="CVV" maxlength="4"  />
 </p>


<br/><br/>
<input type= "submit" id="submit" value="Check out"/>
  <input type= "reset" id="reset" value="Cancel Order"/>
</fieldset></form></div><br/><br/>


<?php

include_once("includes/footer.inc");
     
?>
      </body>
</html>