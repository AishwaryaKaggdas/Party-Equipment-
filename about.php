<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8" />
       <meta name="description" content="Creating Web Applications assignment" />
       <meta name="keywords" content="HTML5,CSS" />
       <meta name="author" content="Aishwarya Kaggdas"  />
       <link href="styles/style.css" rel="stylesheet" >       
       <title>ABOUT US PAGE</title>
</head>
<body>
              
<?php


       include_once("includes/header.inc");

?>
<?php

      include_once("includes/menu.inc");

 ?>

  
<div  class= " background4">

  <h2 class="studentdetails">STUDENT DETAILS</h2>
 <dl id="abtnameh">
 <dt class="abtname">NAME:</dt>
 <dd class="abtname"><strong>AISHWARYA KAGGDAS</strong></dd>
 </dl>

 <dl id="studentno">
  <dt class="studentno">STUDENT NO:</dt>
    <dd class="studentno">103170236</dd>
  </dl>

  <dl id="courseh">
    <dt class="course1">COURSE:</dt>
    <dd class ="course1">Bachelor of Computer Science(BA-CS)</dd>
  </dl>

<dl id="emailh">
    <dt class="email1">EMAIL:</dt>
    <dd class="email1"><a href="mailto:103170236@student.swin.edu.au"> 103170236@student.swin.edu.au</a></dd>
  </dl>

  
<br><br><br><br>
<div id="stimetable">
  <h2 id="STT">Swinburne Time Table</h2>
      <table id="idtable">
      <tr class="tableh">
        <th> </th>
        <th> Monday</th>
        <th> Tuesday</th>
        <th> Wednesday </th>
        <th> Thursday </th>
        <th> Friday </th>
      </tr>
      <tr>
        <td class="tableh"> 8am </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
      <tr>
         <td class="tableh"> </td>
         <td> </td>
         <td></td>
         <td> </td>
         <td ></td>
         <td> </td>
      </tr>
      <tr>
         <td class="tableh"> 9:00 </td>
         <td> </td>
         <td> </td>
         <td> </td>
         <td> </td>
         <td> </td>
      </tr> 
      <tr>
          <td class="tableh"> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
      </tr>
      <tr>
          <td class="tableh"> 10:00 </td>
          <td> </td>
          <td class="programming" rowspan="4">COS10009<br> Live Online 1(1)<br>Hawthorn ONLINE </td>
          <td> </td>
          <td> </td>
          <td> </td>
         
 </tr>  
  <tr>
  <td class="tableh"> </td>
   <td> </td>
   <td ></td>
   <td class="programming" rowspan="4">COS10009<br> WORKSHOP 2(4)<br>Hawthorn ONLINE  </td>
   <td > </td>
             
       
  </tr> 
  <tr>
  <td class="tableh"> 11:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>

   <tr>
   <td class="tableh"> </td>
   <td CLASS="web" rowspan ="4"> COS10011<br> LIVE ONLINE 1(1)<br>HAWTHORN ONLINE</td>
   <td class="networking" rowspan="6"> TNE10005<br/> Practical 1(6) <br/> Hawthorn ONLINE </td>
    <td> </td>
    </tr>

    <tr>
    <td class="tableh"> 12pm </td>
    <td> </td>
    <td> </td>
    </tr>

   <tr>
   <td class="tableh"> </td>
   <td> </td>
    <td class="programming" rowspan="4">COS10009<br> Lab 2(8) <br>Hawthorn ONLINE </td>
    <td class="programming" rowspan="4">COS10009<br> WORKSHOP 1(34) <br>Hawthorn EN103 </td>
    </tr> 

    <tr>
    <td class="tableh"> 1:00 </td>
    <td> </td>
          
    </tr>
    <tr>
    <td class="tableh"> </td>
    <td> </td>
    <td> </td>
    </tr>

    <tr> 
    <td class="tableh"> 2:00 </td>
    <td> </td>
    <td> </td>
    </tr>

    <tr>
    <td class="tableh"> </td>
    <td> </td>
    <td CLASS="web" rowspan="2"> COS10001<br> Lab1 1(2)<br>HAWTHORN ONLINE </td>
    <td> </td>
    <td class="logistics" rowspan="4">COS10003<br>Tutorial 1(42)<br>HAWTHORN ONLINE </td>
    <td ></td>
    </tr>

    <tr>
    <td class="tableh"> 3:00 </td>
    <td> </td>
    <td> </td>
    <td> </td>
    </tr>

     <tr>
     <td class="tableh"> </td>
     <td> </td>
     <td> </td>
     <td > </td>
     <td> </td>
     </tr>

      <tr>
      <td class="tableh"> 4:00 </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>
      <tr> 
      <td class="tableh"> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>

     <tr> 
     <td class="tableh"> 5:00 </td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td> </td>
    <td> </td>
    </tr>

    <tr>
      <td class="tableh"> </td>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> </td>
    </tr>
             <tr>
        <td class="tableh"> 6:00 </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr> 
      <tr>
          <td class="tableh"> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td CLASS="networking" rowspan="3">TNE100005<br>LIVE ONLINE 1(1)<br>HAWTHORN ONLINE </td>
          <td> </td>
     </tr>

      <tr>
        <td class="tableh"> 7:00 </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      
       
      </tr>
       <tr>
          <td class="tableh"> </td>
          <td> </td>
          <td> </td>
          <td> </td> 
          <td> </td>
       </tr>   
      </table> 


      </div> 
      <br><br>        
<div class="personalinfo2">         
<h2 id="personalinfo"> Personal Information </h2>
  <p> Hi I am Aishwarya Kaggdas of Student-id 103170236,born and brought up in India.India is a vast South Asian country with diverse terrain – from Himalayan peaks to Indian Ocean coastline – and history reaching back 5 millennia.My hobbies include dancing, reading and swimming.I also love watching movies and series and my personal favourites include Inception,Dunkirk,Sherlock Homes and Suits.I am a big fan of Christopher Nolan and Leornado Dicaprio's work.I love listening to music as well, my favourite genres include EDMS,<br>
Pop and Alternate.My favorite artists are Calvin Harris,Kygo,Maroon 5 and Martin Garrix.
      </p> <br><br><BR>   
</div>
</div>

<?php

include_once("includes/footer.inc");
     
?>

      </body>
</html>
   
  
   
