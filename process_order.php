<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="description" content="Process Orders" />
	<meta name="keywords"    content="HTML5,CSS,PHP" />
	<meta name="author"      content="Aishwarya Kaggdas"/>
    <title>Process order</title>
</head>
<body>
    <h1>Client information</h1> 



     
<?php
        function sanitise_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;  
        }




if(isset($_POST["Firstname"])){
$firstname = $_POST["Firstname"];
$firstname = sanitise_input($firstname);
}

if(isset($_POST["Lastname"])){
$lastname = $_POST["Lastname"];
$lastname = sanitise_input($lastname);
}

if(isset($_POST["Street"])){
$street = $_POST["Street"];
$street =sanitise_input($street);
}

if(isset($_POST["Suburb"])){
$suburb =$_POST["Suburb"];
$suburb = sanitise_input($suburb);
}

if(isset($_POST["State"])){
$state = $_POST["State"];
$state = sanitise_input($state);
}

if(isset($_POST["Postcode"])){
$postcode = $_POST["Postcode"];
$postcode = sanitise_input($postcode);
}

if(isset($_POST["MobileNumber"])){
$mobile = $_POST["MobileNumber"];
$mobile = sanitise_input($mobile);
}

if(isset($_POST["PreferredContact"])){
$precontact = $_POST["PreferredContact"];
$precontact = sanitise_input($precontact);
}


if(isset($_POST["EmailId"])){
$email = $_POST["EmailId"];
$email = sanitise_input($email);
}

if(isset($_POST["partyequipment"])){
$partyequipment = $_POST["partyequipment"];
$partyequipment = sanitise_input($partyequipment);
}



if(isset($_POST["NCandles"])){
$quantity1 = $_POST["NCandles"];
$quantity1 = sanitise_input($quantity1);
}


if(isset($_POST["NSpeakers"])){
$quantity2 =$_POST["NSpeakers"];
$quantity2 =sanitise_input($quantity2);
}


if(isset($_POST["NConfetti"])){
$quantity3 = $_POST["NConfetti"];
$quantity3 = sanitise_input($quantity3);
}


if(isset($_POST["NLight"])){
$quantity4 = $_POST["NLight"];
$quantity4 = sanitise_input($quantity4);

}

if(isset($_POST["NBalloon"])){
$quantity5 = $_POST["NBalloon"];
$quantity5 = sanitise_input($quantity5);
}

if(isset($_POST["TotalCost"])){
$totalcost = $_POST["TotalCost"];
$totalcost = sanitise_input($totalcost);

}

if(isset($_POST["Query"])){
$queryp = $_POST["Query"];
$queryp = sanitise_input($queryp);
}


if(isset($_POST["Feedback"])){
$feedback = $_POST["Feedback"];
$feedback = sanitise_input($feedback);;
}
 

 //$current_date = date("Y-m-d H:i:s");

if(isset($_POST["CandleType1"])){
$candletype1 = $_POST["CandleType1"];
$candletype1 = sanitise_input($candletype1);
}


if(isset($_POST["CandleType2"])){
$candletype2 = $_POST["CandleType2"];
$candletype2 = sanitise_input($candletype2);;
}

if(isset($_POST["CandleType3"])){
$candletype3 = $_POST["CandleType3"];
$candletype3 = sanitise_input($candletype3);
}


if(isset($_POST["BalloonType1"])){
$balloontype1 = $_POST["BalloonType1"];
$balloontype1 = sanitise_input($balloontype1);
}


if(isset($_POST["BalloonType2"])){
$balloontype2 = $_POST["BalloonType2"];
$balloontype2 = sanitise_input($balloontype2);
}

if(isset($_POST["BalloonType3"])){
$balloontype3 = $_POST["BalloonType3"];
$balloontype3 = sanitise_input($balloontype3);
}

if(isset($_POST["SpeakerType1"])){
$speakertype1 = $_POST["SpeakerType1"];
$speakertype1 = sanitise_input($speakertype1);
}


if(isset($_POST["SpeakerType2"])){
$speakertype2 = $_POST["SpeakerType2"];
$speakertype2 = sanitise_input($speakertype2);;
}

if(isset($_POST["SpeakerType3"])){
$speakertype3 = $_POST["SpeakerType3"];
$speakertype3 = sanitise_input($speakertype3);
}


if(isset($_POST["LightType1"])){
$lighttype1 = $_POST["LightType1"];
$lighttype1 = sanitise_input($lighttype1);
}


if(isset($_POST["LightType2"])){
$lighttype2 = $_POST["LightType2"];
$lighttype2 = sanitise_input($lighttype2);
}

if(isset($_POST["LightType3"])){
$lighttype3 = $_POST["LightType3"];
$lighttype3 = sanitise_input($lighttype3);
}


if(isset($_POST["ConfettiType1"])){
$confettitype1 = $_POST["ConfettiType1"];
$confettitype1 = sanitise_input($confettitype1);
}


if(isset($_POST["ConfettiType2"])){
$confettitype2 = $_POST["ConfettiType2"];
$confettitype2 = sanitise_input($confettitype2);;
}

if(isset($_POST["ConfettiType3"])){
$confettitype3 = $_POST["ConfettiType3"];
$confettitype3 = sanitise_input($confettitype3);
}

//Types of party equipments [checkboxes]

$candlet = "";
    if(isset($_POST["CandleType1"]))
    $candlet = $candlet. sanitise_input($_POST["CandleType1"]);
    if(isset($_POST["CandleType2"]))
    if( $candlet=="")
    $candlet = $candlet. sanitise_input($_POST["CandleType2"]);
    else
    $candlet = $candlet. sanitise_input($_POST["CandleType2"]);

    if(isset($_POST["CandleType3"]))
    if( $candlet=="")
    $candlet = $candlet. sanitise_input($_POST["CandleType3"]);
    else
    $candlet = $candlet. sanitise_input($_POST["CandleType3"]);



$balloont = "";
    if(isset($_POST["BalloonType1"]))
    $balloont = $balloont. sanitise_input($_POST["BalloonType1"]);
    if(isset($_POST["BalloonType2"]))
    if( $balloont=="")
    $balloont = $balloont. sanitise_input($_POST["BalloonType2"]);
    else
    $balloont = $balloont. sanitise_input($_POST["BalloonType2"]);

    if(isset($_POST["BalloonType3"]))
    if( $balloont=="")
    $balloont = $balloont. sanitise_input($_POST["BalloonType3"]);
    else
    $balloont = $balloont. sanitise_input($_POST["BalloonType3"]);


$speakert = "";
    if(isset($_POST["SpeakerType1"]))
    $speakert = $speakert. sanitise_input($_POST["SpeakerType1"]);
    if(isset($_POST["SpeakerType2"]))
    if( $speakert=="")
    $speakert = $speakert. sanitise_input($_POST["SpeakerType2"]);
    else
    $speakert= $speakert. sanitise_input($_POST["SpeakerType2"]);

    if(isset($_POST["SpeakerType3"]))
    if( $speakert=="")
    $speakert = $speakert. sanitise_input($_POST["SpeakerType3"]);
    else
    $speakert = $speakert. sanitise_input($_POST["SpeakerType3"]);



$lightt = "";
    if(isset($_POST["LightType1"]))
    $lightt = $lightt. sanitise_input($_POST["LightType1"]);
    if(isset($_POST["LightType2"]))
    if( $lightt=="")
    $lightt = $lightt. sanitise_input($_POST["LightType2"]);
    else
    $lightt = $lightt. sanitise_input($_POST["LightType2"]);

    if(isset($_POST["LightType3"]))
    if( $lightt=="")
    $lightt = $lightt. sanitise_input($_POST["LightType3"]);
    else
    $lightt = $lightt. sanitise_input($_POST["LightType3"]);




$confettit = "";
    if(isset($_POST["ConfettiType1"]))
    $confettit = $confettit. sanitise_input($_POST["ConfettiType1"]);
    if(isset($_POST["ConfettiType2"]))
    if( $confettit=="")
    $confettit = $confettit. sanitise_input($_POST["ConfettiType2"]);
    else
    $confettit = $confettit. sanitise_input($_POST["ConfettiType2"]);

    if(isset($_POST["ConfettiType3"]))
    if( $confettit=="")
    $confettit = $confettit. sanitise_input($_POST["ConfettiType3"]);
    else
    $confettit = $confettit. sanitise_input($_POST["ConfettiType3"]);





// PAYMENT DETAILS

if(isset($_POST["CREDIT"])){
$cardtype = $_POST["CREDIT"];
$cardtype = sanitise_input($cardtype);

    
}

if(isset($_POST["Cname"])){
$cardname = $_POST["Cname"];
$cardname = sanitise_input($cardname);

}


if(isset($_POST["Cnumber"])){
$cardnumber = $_POST["Cnumber"];
$cardnumber = sanitise_input($cardnumber);
}

if(isset($_POST["Cexpiry"])){
$cardexpiry = $_POST["Cexpiry"];
$cardexpiry = sanitise_input($cardexpiry);
}

if(isset($_POST["CVV"])){
$cvv = $_POST["CVV"];
$cvv = sanitise_input($cvv);

}

$number13 = substr("$cardnumber",0,2);
$number   = substr("$postcode", 0,1);
$number14 = substr("$cardnumber",0,1);










// VALIDATION






$errMsg = "";
// FIRST NAME


if($firstname==""){
    $errMsg .= "<p>Enter your first name.</p>";
}
elseif (!preg_match("/^[a-zA-z]*$/", $firstname)){

     $errMsg .="<p>Enter a valid first name.</p>";

}
elseif(strlen($firstname)>"25"){

       $errMsg .= "<p>First name cannot have more than 25 characters.</p>";

}

//LAST NAME

if($lastname==""){
    $errMsg .= "<p>Enter your last name.</p>";
}
elseif (!preg_match("/^[a-zA-z]*$/", $lastname)){

     $errMsg .="<p>Enter a valid last name.</p>";

}
elseif(strlen($lastname)>"25"){

       $errMsg .= "<p>Last name cannot have more than 25 characters.</p>";

}



// STREET
if ($street ==""){
$errMsg .= "<p>Enter street address.</p>";
}
elseif(strlen($street)>"40"){

       $errMsg .= "<p>Street address cannot have more than 40 characters.</p>";

}



//SUBURB

if($suburb==""){
$errMsg .= "<p>Enter suburb.</p>";

}
elseif (!preg_match("/^[a-zA-z]*$/", $suburb)){

     $errMsg .="<p>Enter a valid suburb.</p>";

}
elseif(strlen($suburb)>"20"){

       $errMsg .= "<p>Suburb cannot have more than 20 characters.</p>";

}



//EMAIL

if($email==""){
      
      $errMsg .= "<p>Enter your email id<p>";
  }


elseif (!preg_match("/^[a-zA-z0-9._%+-]+@[a-zA-z0-9.-]+\.[a-zA-z0-9.-]{1,4}$/", $email)){

     $errMsg .="<p>Enter a valid email id.</p>";

}


//POSTCODE

if($postcode==""){

     $errMsg .= "<p>Enter postcode.</p>";
}
elseif((strlen($postcode)!="4")){
     
     $errMsg .= "<p>postcode should consists of four digits.</p>";
}
elseif(!is_numeric($postcode)){
      
      $errMsg .= "<p>Enter a valid postcode</p>";
}





//STATE AND POSTCODE

if ($state=="select an option"){


       $errMsg .= "<p>Select a state</p>";
}

else if ($state =="VIC"){
    if(($number!="3") &&($number!="8")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="NSW"){
    if(($number!="1") &&($number!="2")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="QLD"){
    if(($number!="4") &&($number!="9")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="WA"){
    if(($number!="6")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="SA"){
    if(($number!="5")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="TAS"){
    if(($number!="7")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}

elseif ($state =="ACT" || $state=="NT"){
    if(($number!="0")){
        $errMsg .= "<p>Postcode and state do not match.</p>";
    }
}



//MOBILE NUMBER

if($mobile==""){
    $errMsg .= "<p>Enter your mobile number.</p>";
}

elseif ((strlen($mobile)!="10")){
    $errMsg .= "<p> Mobile number should contain exactly 10 digits.</p>";
}
elseif (!is_numeric($mobile)){
    $errMsg .= "<p>Mobile number should only contain numbers.</p>";
}

//  PREFERRED CONTACT

if($precontact==""){
    $errMsg .= "<p>Please select a preferred contact.</p>";
}

//QUANTITY

if(($quantity1=="") && ($quantity2=="") && ($quantity3 =="") && ($quantity4=="") && ($quantity5=="")){
        $errMsg .= "<p>Enter Quantity.</p>";
}

else if ((!is_numeric($quantity1)) && (!is_numeric($quantity2)) && (!is_numeric($quantity3)) && (!is_numeric($quantity4)) && (!is_numeric($quantity1))){

    $errMsg .= "<p>Quantity should only have numbers.</p>";
}

 

//PARTY EQUIPMENT

if($partyequipment=="select an option"){

     $errMsg .= "<p>Please select a party equipment</p>";
}



if (($candlet == "") && ($balloont == "") && ($speakert == "") && ($lightt == "") && ($confettit == "")){
   $errMsg .= "</p>Select any one of the party equipment type</p>";
}









//CREDIT CARD VALIDATION

if($cardtype==""){

       $errMsg .= "<p>Select credit card type.</p>";
}

elseif($cardtype=="mastercard"){
   if(($number13!="51") &&($number13!="52") && ($number13!="53") && ($number13!="54") && ($number13!="55") || (strlen($cardnumber)!="16"))
   {
         $errMsg .= "</p>Credit card type and number do not match</p>";

   }
}

elseif($cardtype=="visa"){
if(($number14!="4") || (strlen($cardnumber)!="16"))
{
         $errMsg .= "</p>Credit card type and number do not match</p>";

   }
}

elseif($cardtype=="Americanexpress"){
   if(($number13!="34") && ($number13!="37") || (strlen($cardnumber)!="15"))
{
         $errMsg .= "</p>Credit card type and number do not match</p>";

   }
}


if($cardname==""){
    $errMsg .= "<p>Enter your credit card name.</p>";
}
elseif (!preg_match("/^[a-zA-z]*$/", $cardname)){

     $errMsg .="<p>Enter a valid credit card name.</p>";

}
elseif(strlen($cardname)>"40"){

       $errMsg .= "<p>Credit card name cannot have more than 40 characters.</p>";

}


if($cvv==""){
    $errMsg .= "<p>Enter Cvv.</p>";
}
elseif(!is_numeric($cvv)){
    $errMsg .= "</p>Enter a valid cvv number.</p>";
}
elseif($cardtype=="visa"){
    if(strlen($cvv)!="3"){
        $errMsg.= "</p>Credit card type and cvv do not match.</p>";
    }
}
elseif($cardtype=="mastercard"){
    if(strlen($cvv)!="3"){
        $errMsg.= "</p>Credit card type and cvv do not match.</p>";
    }
}
elseif($cardtype=="Americanexpress"){
    if(strlen($cvv)!="4"){
        $errMsg.= "</p>Credit card type and cvv do not match.</p>";
    }
}


if ($cardexpiry==""){
    $errMsg.= "<p>Enter card expiry date.</p>";
}
else if (!preg_match("/^\d\d-\d\d$/", $cardexpiry)){

     $errMsg .= "<p>Enter a valid card expiry date.</p>";


}

echo "$errMsg";

/*
if (($number13!="44"))

 {
   echo "error";
}
echo strlen("$cardnumber");

if (substr("$cardnumber",0,2)!= "55"){
  echo "error";

  }*/

 // echo "$cardnumber";
 // echo "$postcode";



session_start();
$_SESSION['Firstname'] =            $firstname;
$_SESSION['Lastname']  =            $lastname;
$_SESSION['Street']    =            $street;
$_SESSION['Suburb']   =             $suburb;
$_SESSION['State'] =                $state;
$_SESSION['Postcode'] =             $postcode;
$_SESSION['MobileNumber'] =         $mobile;
$_SESSION['PreferredContact'] =     $precontact;
$_SESSION['EmailId'] =              $email ;
$_SESSION['partyequipment'] =       $partyequipment;
$_SESSION['NCandles'] =             $quantity1;
$_SESSION['NSpeakers']  =           $quantity2;
$_SESSION['NConfetti'] =            $quantity3;
$_SESSION['NLight']  =              $quantity4;
$_SESSION['NBalloon']  =            $quantity5;
$_SESSION['TotalCost'] =            $totalcost;                               
$_SESSION['Query'] =                $queryp;
$_SESSION['Feedback'] =             $feedback;

$_SESSION['Candletype'] =           $candlet;
$_SESSION['BalloonType'] =          $balloont;
$_SESSION['SpeakerType'] =          $speakert;
$_SESSION['LightType'] =            $lightt;
$_SESSION['ConfettiType'] =         $confettit;

$_SESSION['CREDIT'] =               $cardtype;
$_SESSION['Cname'] =                $cardname;
$_SESSION['Cnumber'] =              $cardnumber;
$_SESSION['Cexpiry'] =              $cardexpiry;
$_SESSION['CVV'] =                  $cvv;

$_SESSION['errMsg']  =              $errMsg;









if($errMsg !="")
                      {
                        header("location:fix_order.php");
                      }


else{


require_once ("settings.php");

      $conn = @mysqli_connect($host,
      $user,
      $pwd,
      $sql_db
    );



if (!$conn){
      
      echo "<p>Database connection failure.</p>";}
      else{


      
      $sql_table ="orders";
      $query = "insert into $sql_table (
first_name,last_name,email_id,street,suburb,state,postcode,mobile,preferred_contact,party_equipment,candle_type1,candle_type2,candle_type3, balloon_type1,balloon_type2, balloon_type3, speaker_type1,speaker_type2,speaker_type3,light_type1,light_type2,light_type3,confetti_type1,confetti_type2,confetti_type3,candles_qty,speakers_qty,confetti_qty,lights_qty,balloons_qty,query,feedback,card_type,card_name,card_number,card_expiry,cvv,order_cost,order_time) values ('$firstname','$lastname','$email','$street','$suburb','$state','$postcode','$mobile','$precontact','$partyequipment','$candletype1','$candletype2','$candletype3','$balloontype1','$balloontype2','$balloontype3','$speakertype1','$speakertype2','$speakertype3','$lighttype1','$lighttype2','$lighttype3','$confettitype1','$confettitype2','$confettitype3','$quantity1','$quantity2','$quantity3','$quantity4','$quantity5','$queryp','$feedback','$cardtype','$cardname','$cardnumber','$cardexpiry','$cvv','$totalcost',Now())";
      $result = mysqli_query($conn,$query);

  if(!$result) {


                   echo "<p class=\"wrong\">Something is wrong with",  $query, "<p>";
                   
                 }
             

                      
   else {



                      echo "<p>Everything is working</p>";
                     
                      header("location:receipt.php");
                    }


                    
                    mysqli_close($conn);


                    }


}



  
?>
</body>
</html>






















