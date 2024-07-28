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
       <title>MANAGER_SEARCH6 PAGE</title>
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
      else{   
              $delete = trim($_POST["del"]);
              $delete= htmlspecialchars($delete);
              $delete = mysqli_escape_string($conn,$delete);


            $sql_table = "orders";
            $query = "Delete from orders WHERE order_status='pending' AND order_id ='$delete' ";
            $result = mysqli_query($conn,$query);

            if(!$result) {
            	echo "<p>Something is wrong with ", $query, "<p>";
            }  else {


                      

                    echo "<p>Successfully deleted your order </p><p>The order id deleted is $delete</p><p>You can check the changes made to the order by clicking on Search orders under all orders. </p>";
                     
                    }
               
                   
                    
                
                       
                

                 mysqli_close($conn); 
                }
          ?> 
          
 
<?php

include_once("includes/footer.inc");
     
?>
 </body>
 </html>              
