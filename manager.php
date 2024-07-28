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
       <title>MANAGER PAGE</title>
</head>
<body >
 <?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>

<div class="background3">
<h1 id="feedback">SEARCH ORDERS</h1>
      <form method = "post" action="manager_search.php">
      <fieldset class="formfieldset"><legend>SEARCH ALL ORDER DETAILS</legend>
            <p > * ALL ORDERS </p>
                 <p>   <input type="submit" id = "submit" value="Search orders" /></p>
      </fieldset>
      </form>


      <form method = "post" action="manager_search1.php">
      <fieldset class="formfieldset"><legend>SEARCH ORDERS BASED ON NAME</legend>
            <p >   <label for="name">* NAME: </label>
                  <input type="text" name="name" id="name" /></p>
            <p>   <input type="submit" id = "submit" value="Search orders" /></p>
      </fieldset>
      </form>
     
      <form method = "post" action="manager_search2.php">
      <fieldset class="formfieldset"><legend>SEARCH ORDERS FOR A PARTICULAR PRODUCT</legend>
            <p >   <label for="product">* PRODUCT: </label>
                  <input type="text" name="product" id="product" /></p>
            <p>   <input type="submit" id = "submit" value="Search orders" /></p>
      </fieldset>
      </form>


     <form method = "post" action="manager_search3.php">
      <fieldset class="formfieldset"><legend>SEARCH All ORDERS THAT ARE PENDING</legend>
            <p > * ORDERS : </p>
                 
           <p>   <input type="submit" id = "submit" value="Search orders" /></p>
      </fieldset>
      </form>

      <form method = "post" action="manager_search4.php">
      <fieldset class="formfieldset"><legend>ALL ORDERS BASED ON TOTAL COST [MOST EXPENSIVE TO LEAST] </legend> <p > * ALL ORDERS BASED ON COST</p>
                 <p>   <input type="submit" id = "submit" value="Search orders" /></p>
          
      </fieldset>
      </form>

      <form method = "post" action="manager_search5.php">
      <fieldset class="formfieldset"><legend>ENTER THE ORDER ID YOU WISH TO UPDATE </legend> <p ><label for = "update"> * ORDER ID</label> 
             <input type="text" name="update" id="update" /></p>
                 <p ><label for = "update2"> * ENTER THE ORDER STATUS YOU WANT TO CHANGE IT TO</label> 
             <input type="text" name="update2" id="update2" /></p>
                 <p>   <input type="submit" id = "submit" value="UPDATE" /></p>
</fieldset>
      </form>


     <form method = "post" action="manager_search6.php">
      <fieldset class="formfieldset"><legend> ENTER THE ORDER ID YOU WISH TO DELETE</legend>
            <p >  <label for="del">* ORDER ID: </label>
                  <input type="text" name="del" id="del" /></p>
           <p>   <input type="submit" id = "submit" value="DELETE" /></p>
      </fieldset>
      </form>           
          
     

















 
<?php

include_once("includes/footer.inc");
     
?>
      </body>
</html>