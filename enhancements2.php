<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" >  
       <title>ENHANCEMENT-2 PAGE</title>
</head>
<body>
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>
<div  class= " background5">
  <h1 id="enhancement">ENHANCEMENTS</h1><br><br>
  <div class="Eheading">
  <h4> The two Enhancements made in this website using javascript are:</h4>
    <ol>
    <li>On payment.html, I have implemented a timer so that the user has a limited time to complete the payment.<br/>After you submit the form on enquiry page,which will redirect you to the payment page,I have used  The confirm() method that displays a dialog box with a message that says "Do You Wish To Proceed?", along with an OK and a Cancel button.On clicking the okay button ,an alert box pops up that says "You have 1 minute and 30 seconds to enter your credit card details".If you click the cancel button you will be redirected to the home page.</li>
    <li>On payment.html, the input field for Name on Credit Card pre-loads as a concatenation of the firstname and lastname from the enquiry page.I have done this  by concating the sessionstorage.firstname and sessionstorage.lastname and then assigning it to "name on credit card" input.
      </li>
    </ol> </div>
<div class="Eheading">
    <h4 >Below are the links where I have learnt the enhancements:</h4>
      <ul>
      <li><a href="https://www.google.com">https://www.google.com</a></li>
      <li> <a href="https://www.w3schools.com">https://www.w3schools.com</a></li>
      <li>  <a href="https://www.stackoverflow.com">https://www.stackoverflow.com</a></li>
      </ul>
 </div>
      
  <div class="Eheading">
     <h4 > Below are the links for all the sources of information that I have used in the website:</h4>
      <ul>
      <li>  <a href="https://www.google.com">https://www.google.com</a></li></ul>
    </div></div>


     <?php

include_once("includes/footer.inc");
     
?>

      </body>
</html>
   
  
   

      