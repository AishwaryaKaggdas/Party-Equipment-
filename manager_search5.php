<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" >     
       <title>MANAGER_SEARCH5 PAGE</title>
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
      else{   $update = trim($_POST["update"]);
              $update = htmlspecialchars($update);
              $update = mysqli_escape_string($conn,$update);
              

              $update2 = trim($_POST["update2"]);
              $update2 = htmlspecialchars($update2);
              $update2 = mysqli_escape_string($conn,$update2);


            $sql_table = "orders";
            $query = "Update orders SET order_status='$update2' WHERE order_id = '$update' ";
            $result = mysqli_query($conn,$query);

            if(!$result) {
            	echo "<p>Something is wrong with ", $query, "<p>";
            }  else {


                      

                    echo "<p>Successfully updated your order </p><p>The order id updated is $update</p><p>You can check the changes made to the order by clicking on Search orders under all orders </p>";
                     
                    }
               
                   
                    
                
                       
                

                 mysqli_close($conn); 
                }
          ?> 
          
 

<?php

include_once("includes/footer.inc");
     
?>

</div>
 </body>
 </html>              
