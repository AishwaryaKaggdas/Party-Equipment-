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
       <title>MANAGER_SEARCH2 PAGE</title>
</head>
<body >
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>





<div class="background3">

<?php
     require_once ("settings.php");

     $conn = @mysqli_connect($host,
      $user,
      $pwd,
      $sql_db
    );

     if (!$conn){
      
      echo "<p>Database connection failure</p>";}
      else{   $product = trim($_POST["product"]);
              $product = htmlspecialchars($product);
              $product = mysqli_escape_string($conn,$product);
            
            $sql_table = "orders";
            $query = "Select order_id,first_name,last_name,party_equipment,candles_qty,speakers_qty,confetti_qty,lights_qty,balloons_qty,order_cost,order_time,order_status FROM orders where party_equipment = '$product'";
            $result = mysqli_query($conn,$query);

            if(!$result) {
            	echo "<p>Something is wrong with ", $query, "<p>";
            }  else {


                  echo "<table border = \"1\">\n";
                  echo "<tr>\n "
                       ."<th scope = \"col\">order_id</th>\n "
                       ."<th scope = \"col\">first name</th>\n "
                       ."<th scope = \"col\">last name</th>\n "
                       ."<th scope = \"col\">Party Equipment</th>\n "
                       ."<th scope = \"col\">candle qty</th>\n "
                       ."<th scope = \"col\">speaker qty</th>\n "
                       ."<th scope = \"col\">confetti qty</th>\n "
                       ."<th scope = \"col\">light qty</th>\n "
                       ."<th scope = \"col\">balloon qty</th>\n "
                       ."<th scope = \"col\">Total cost</th>\n "
                       ."<th scope = \"col\">order time</th>\n "
                       ."<th scope = \"col\">order status</th>\n "
                        ."</tr> \n ";

                    
                 while ($row = mysqli_fetch_assoc($result)){

                  echo "<tr>\n ";
                  echo "<td>" ,$row["order_id"],"</td>\n ";
                 echo "<td>" ,$row["first_name"],"</td>\n ";
                  echo "<td>" ,$row["last_name"],"</td>\n ";
                   echo "<td>" ,$row["party_equipment"],"</td>\n ";
                    echo "<td>" ,$row["candles_qty"],"</td>\n ";
                  echo "<td>" ,$row["speakers_qty"],"</td>\n ";
                  echo "<td>" ,$row["confetti_qty"],"</td>\n ";
                  echo "<td>" ,$row["lights_qty"],"</td>\n ";
                  echo "<td>" ,$row["balloons_qty"],"</td>\n ";
                   echo "<td>" ,$row["order_cost"],"</td>\n ";
                    echo "<td>" ,$row["order_time"],"</td>\n ";
                   echo "<td>" ,$row["order_status"],"</td>\n ";
                  echo "</tr>\n ";
                 }  

                 echo "<table>\n ";
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
