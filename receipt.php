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
       <title>RECEIPT PAGE</title>
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



    function mask($string){
          return substr(str_repeat("*",25),strlen($string));


      }



     require_once ("settings.php");

     $conn = @mysqli_connect($host,
      $user,
      $pwd,
      $sql_db
    );

     if (!$conn){
      
      echo "<p>Database connection failure</p>";}
      else{
            
            $sql_table = "orders";
            $query = "Select * from orders order by order_id desc limit 1";
            $result = mysqli_query($conn,$query);

            if(!$result) {
                  echo "<p>Something is wrong with ", $query, "<p>";
            }  else {


                  echo "<table border = \"2\">\n";
                  
                              
                        

                    
                  while ($row = mysqli_fetch_assoc($result)){
                  echo "<p><strong><em>Congratulations your order has been placed successfully , below is your order receipt.</em></strong></p>";

                   echo "<tr> ";
                   echo"<th >Order ID</th>";
                   echo "<td >" ,$row["order_id"],"</td> ";
                   echo "</tr> ";

                   echo "<tr> ";
                   echo"<th >First name</th>";
                   echo "<td>" ,$row["first_name"],"</td> ";
                   echo "</tr> ";

                   echo "<tr> ";
                   echo"<th >Last name</th>";
                   echo "<td>" ,$row["last_name"],"</td>";
                   echo "</tr> ";

                   echo "<tr> ";
                   echo"<th >Email id</th>";
                   echo "<td>" ,$row["email_id"],"</td>";
                   echo "</tr>";

                   echo "<tr> ";
                   echo "<th >Street</th>";
                   echo "<td>" ,$row["street"],"</td> ";
                   echo "</tr> ";

                   echo "<tr> ";
                   echo"<th >Suburb</th>";
                   echo "<td>" ,$row["suburb"],"</td>";
                   echo "</tr> ";

                   echo "<tr> ";
                   echo"<th >State</th>";
                   echo "<td>" ,$row["state"],"</td>";
                   echo "</tr>";

                   echo "<tr> ";
                   echo"<th >Postcode</th>";
                   echo "<td>" ,$row["postcode"],"</td>";
                   echo "</tr>";

                   echo"<th >Contact number</th>";
                   echo "<td>" ,$row["mobile"],"</td>";
                   echo "</tr> ";
                   echo "<tr> ";
                   
                   echo "<tr> ";
                   echo"<th >Preferred contact</th>";
                   echo "<td>" ,$row["preferred_contact"],"</td>";
                   echo "</tr>";

                   echo "<tr> ";
                   echo"<th >Party equipment</th>";
                   echo "<td>" ,$row["party_equipment"],"</td>";
                   echo "</tr>";

                   echo "<tr> ";
                   echo"<th >Candle type 1</th>";
                   echo "<td>" ,$row["candle_type1"],"</td>";
                   echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Candle type 2</th>";
                  echo "<td>" ,$row["candle_type2"],"</td>";
                  echo "</tr> ";

                  echo "<tr> ";
                  echo"<th >Candle type 3</th>";
                  echo "<td>" ,$row["candle_type3"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Balloon type 1</th>";
                  echo "<td>" ,$row["balloon_type1"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Balloon type 2</th>";
                  echo "<td>" ,$row["balloon_type2"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Balloon type 3</th>";
                  echo "<td>" ,$row["balloon_type3"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Speaker type 1</th>";
                  echo "<td>" ,$row["speaker_type1"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Speaker type 2</th>";
                  echo "<td>" ,$row["speaker_type2"],"</td>";
                  echo "</tr>";

                  
                  echo "<tr> ";
                  echo"<th >Speaker type 3</th>";
                  echo "<td>" ,$row["speaker_type3"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Light type 1</th>";
                  echo "<td>" ,$row["light_type1"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Light type 2</th>";
                  echo "<td>" ,$row["light_type2"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Light type 3</th>";
                  echo "<td>" ,$row["light_type3"],"</td>";
                  echo "</tr>";


                  echo "<tr> ";
                  echo"<th >Confetti type 1</th>";
                  echo "<td>" ,$row["confetti_type1"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Confetti type 2</th>";
                  echo "<td>" ,$row["confetti_type2"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Confetti type 3</th>";
                  echo "<td>" ,$row["confetti_type3"],"</td>";
                  echo "</tr>";


                  echo "<tr> ";
                  echo"<th >Candles quantity</th>";
                  echo "<td>" ,$row["candles_qty"],"</td> ";
                  echo "</tr> ";

                  echo "<tr> ";
                  echo"<th >Speakers quantity</th>";
                  echo "<td>" ,$row["speakers_qty"],"</td> ";
                  echo "</tr> ";

                  echo "<tr> ";
                  echo"<th >Confetti quantity</th>";
                  echo "<td>" ,$row["confetti_qty"],"</td>";
                  echo "</tr> ";

                  echo "<tr> ";
                  echo"<th >Lights quantity</th>";
                  echo "<td>" ,$row["lights_qty"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Balloons quantity</th>";
                  echo "<td>" ,$row["balloons_qty"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Query</th>";
                  echo "<td>" ,$row["query"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Feedback</th>";
                  echo "<td>" ,$row["feedback"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Card Type</th>";
                  echo "<td>" ,mask($row["card_type"]),"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Card Name</th>";
                  echo "<td>" ,mask($row["card_name"]),"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Card number</th>";
                  echo "<td>" ,mask($row["card_number"]),"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Card Expiry</th>";
                  echo "<td>" ,mask($row["card_expiry"]),"</td>";
                  echo "</tr>";


                  echo "<tr> ";
                  echo"<th >CVV</th>";
                  echo "<td>" ,mask($row["cvv"]),"</td>";
                  echo "</tr>";



                  echo "<tr> ";
                  echo"<th >Total cost</th>";
                  echo "<td>" ,$row["order_cost"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Order Status</th>";
                  echo "<td>" ,$row["order_status"],"</td>";
                  echo "</tr>";

                  echo "<tr> ";
                  echo"<th >Order time</th>";
                  echo "<td>" ,$row["order_time"],"</td>";
                  echo "</tr>";


                 }  

                 echo "<table> \n";
                 mysqli_free_result($result);
                 }

                 mysqli_close($conn); 
                }
          ?> 
          


<?php

include_once("includes/footer.inc");
     
?>
      </body>
</html>