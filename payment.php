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
       <title>PAYMENT PAGE</title>
</head>
<body id ="Paymentpage">
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>
<div  class= " background6">
  <form method="post" id="form2"  action="process_order.php"   novalidate="novalidate">
    <h2 id="customer">Customer Details</h2>
<fieldset class = "formfieldset23">
  <p><em>Hi, <span id="firstname_info"></span> <span id="lastname_info"></span>.</em><br><br><strong>Below are Your Details:</strong></p>
 <p> <strong>Address Details:- </strong><em><span id="street_info"></span>, <span id="suburb_info"></span>,<span id="state_info"></span>,<span id="postcode_info"></span></em><br/></p>
<strong> Mobile No:-</strong><em> <span id="mobile_info"></span></em><br/><br/>
<strong> Preferred Contact No:-</strong><em> <span id="contact_info"></span></em><br/><br/>
 <strong>Email Id:-</strong><em> <span id="email_info"></span></em><br/><br/>
<u> <strong>Product Enquiry Details:</strong></u><br/><br/>
<strong>Type of Party Equipment:</strong><em><span id="TypeEquip"></span></em><br/><br/>
<strong> Candle Type:</strong><br/><em><span id="CandleTY1"></span><br/><span id="CandleTY2"></span><br/><span id="CandleTY3"></span></em><br/><br/>

<strong>Balloon Type:</strong><br/><em><span id="balloonty1"></span><br/><span id="balloonty2"><br/></span><br/><span id="balloonty3"></span></em><br/><br/>

<strong>Speaker Type:</strong><br/><em><span id="speakerty1"></span><br/><span id="speakerty2"><br/></span><br/><span id="speakerty3"></span></em><br/><br/>
 
<strong>Light Type:</strong><br/><em><span id="lightty1"></span><br/><span id="lightty2"><br/></span><br/><span id="lightty3"></span></em><br/> <br/>


<strong>Confetti Type:</strong><br/><em><span id="confettity1"></span><br/><span id="confettity2"></span><br/><span id="confettity3"></span></em><br/><br/>


 <strong><u> Number Of Equipments:</u></strong><br/><br/>
 <strong> Candles:-</strong><span id="candle_info"></span><br /><br/>
 <strong>Speakers:-</strong><span id="speaker_info"></span><br /><br/>
 <strong>Confetti:-</strong><span id="confetti_info"></span><br /><br/>
 <strong>Light:-</strong><span id="light_info"></span><br /><br/>
 <strong>Balloon:-</strong><span id="balloon_info"></span><br /><br/>
 <strong>Total Amount:-</strong>Rs<span id="cost_info"></span><br /><br/>
 <strong>Product Queries:</strong><em><span id="productQ"></span></em><br/><br/>
<strong>Feedback:</strong><em><span id="feedback"></span></em><br/><br/>
<p>
  <input type="hidden" name="Firstname" id="S1" />
  <input type="hidden" name="Lastname" id="S2" />
  <input type="hidden" name="Street" id="S3" />
  <input type="hidden" name="Suburb" id="S4" />
  <input type="hidden" name="State" id="S5" />
  <input type="hidden" name="Postcode" id="S6" />
  <input type="hidden" name="MobileNumber" id="S7" />
  <input type="hidden" name="PreferredContact" id="S8" />
  <input type="hidden" name="EmailId" id="S9" />
  <input type="hidden" name="partyequipment" id="S10" />

  <input type="hidden" name="CandleType1" id="S11" />
  <input type="hidden" name="CandleType2" id="S12" />
  <input type="hidden" name="CandleType3" id="S13" />

  <input type="hidden" name=" BalloonType1" id="S14" />
  <input type="hidden" name=" BalloonType2" id="S15" />
  <input type="hidden" name=" BalloonType3" id="S16" />


  <input type="hidden" name=" SpeakerType1" id="S17" />
  <input type="hidden" name=" SpeakerType2" id="S18" />
  <input type="hidden" name=" SpeakerType3" id="S19" />


  <input type="hidden" name=" LightType1" id="S20" />
  <input type="hidden" name=" LightType2" id="S21" />
  <input type="hidden" name=" LightType3" id="S22" />




  <input type="hidden" name=" ConfettiType1" id="S23" />
  <input type="hidden" name=" ConfettiType2" id="S24" />
  <input type="hidden" name=" ConfettiType3" id="S25" />



  <input type="hidden" name="NCandles" id="S26" />
  <input type="hidden" name="NSpeakers" id="S27" />
  <input type="hidden" name="NConfetti" id="S28" />
  <input type="hidden" name="NLight" id="S29" />
  <input type="hidden" name="NBalloon" id="S30" />
  <input type="hidden" name="TotalCost" id="S31" />
  <input type="hidden" name="Query" id="S32" />
  <input type="hidden" name="Feedback" id="S33" />


</p>
</fieldset>
  

<fieldset class = "formfieldset23">
    <legend> Credit Card Details</legend>
   <p><label for= "CREDIT"> * Select Credit Card type </label>
    <select name="CREDIT" id="CREDIT"   required="required">
      <option value="" disabled selected> Select an option</option>
      <option value="visa">VISA</option>
      <option value="mastercard">MASTERCARD</option>
      <option value="Americanexpress">AMERICAN EXPRESS</option>
    </select>
  </p>
  <p><label for="Cname"  > * Enter name on Credit card </label>
   <input type="text" name="Cname"  maxlength="40" size="23" id="Cname"  required="required" pattern="^[a-zA-Z\s]+$" value ="" />
 </p>
 <p><label for="Cnumber"> * Enter Credit card number </label>
   <input type="text" name="Cnumber"   maxlength="16"   size="23" id="Cnumber" required="required" pattern="[0-9]{15,16}"  />
 </p>
 <p><label for="Cexpiry"> * Enter Credit card expiry date </label>
   <input type="text" name="Cexpiry"   maxlength="5" size="23" id="Cexpiry" required="required"  pattern="[0-9]{2}-[0-9]{2}" placeholder="mm-yy" />
 </p>

 <p><label for="CVV"> * Enter CVV number </label>
   <input type="text" name="CVV"  size="23" id="CVV" maxlength="4" required="required" pattern= "[0-9]+$" placeholder="CVV" />
 </p>

 <br><br>
<input type= "submit" id="submit" value="Check Out"/>
 <input type= "reset" id="reset"  value="Cancel order"/><br><br>
</fieldset></form></div>

<?php

include_once("includes/footer.inc");
     
?>


 
      </body>
</html>
   
  
   

      

