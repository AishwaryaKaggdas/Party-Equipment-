/*
           filename: part2.js
           author: Aishwarya Kaggdas
           created: 19th April
           last modified: 25th April
           Purpose: To validate my website "Aishwarya's party equipments"
*/




"use strict"




 
//VALIDATING THE FIRST FORM {ENQUIRE.HTML}
function validateForm1()
                      

                  {
                   var cost=0;               
                   var result = true;
                   var errMsg = "";
                   var firstName = document.getElementById("username").value;
                   var lastName = document.getElementById("lastname").value;
                   var email = document.getElementById("emailid").value;
                   var street = document.getElementById("streetaddress").value;
                   //var state_selection = document.getElementById("state");
                   var state = document.getElementById("state").value;
                   var pcode = document.getElementById("postcode").value;
                   var suburb = document.getElementById("suburb").value;
                   var mobile=document.getElementById("mobileno").value;
                   var contact1=document.getElementById("contact1").checked;
                   var contact2=document.getElementById("contact2").checked;
                   var contact3=document.getElementById("contact3").checked;
                   //var PartyEquipment_selection = document.getElementById("partye");
                   var PartyEquipment_list = document.getElementById("partye").options[document.getElementById("partye").selectedIndex].text;

                   var CandleType1=document.getElementById("candletype1").checked;
                   var CandleType2=document.getElementById("candletype2").checked;
                   var CandleType3=document.getElementById("candletype3").checked;

                   
                   var BalloonType1=document.getElementById("balloontype1").checked;
                   var BalloonType2=document.getElementById("balloontype2").checked;
                   var BalloonType3=document.getElementById("balloontype3").checked;

                   var SpeakerType1=document.getElementById("speakertype1").checked;
                   var SpeakerType2=document.getElementById("speakertype2").checked;
                   var SpeakerType3=document.getElementById("speakertype3").checked;

                   var LightType1=document.getElementById("lighttype1").checked;
                   var LightType2=document.getElementById("lighttype2").checked;
                   var LightType3=document.getElementById("lighttype3").checked;

                   var ConfettiType1=document.getElementById("confettitype1").checked;
                   var ConfettiType2=document.getElementById("confettitype2").checked;
                   var ConfettiType3=document.getElementById("confettitype3").checked;

                   var candle = document.getElementById("CAN").value;
                   var speaker = document.getElementById("SPE").value;
                   var confetti = document.getElementById("CON").value;
                   var light = document.getElementById("LIG").value;
                   var balloon = document.getElementById("BAL").value;
                   var complaints = document.getElementById("complaints").options[document.getElementById("complaints").selectedIndex].text;
                   var feedback=document.getElementById("comments").value;
                                    

               
                   //validation for Quantity

                /*  if (candle == "" && speaker == "" && confetti == "" && light == ""  && balloon == "" ){
                  
                  errMsg += "Please enter Quantity for any one of the Products \n";
                  result = false;
                  
                 }
                  
                  //validation for quantity to be a positive integer
              


                 if(candle!=""  &&    !candle.match(/^[1-9][0-9]*$/))
                 
                   {
                       errMsg += "Enter a valid quantity for candle \n";
                       result=false;
                   }


                 if(speaker!=""  &&    !speaker.match(/^[1-9][0-9]*$/))
                 
                   {
                       errMsg += "Enter a valid quantity for speaker \n";
                       result=false;
                   }

                 if(light!=""  &&     !light.match(/^[1-9][0-9]*$/))
                 
                   {
                       errMsg += "Enter a valid quantity for light \n";
                       result=false;
                   }


                 if(confetti!=""  &&    !confetti.match(/^[1-9][0-9]*$/))
                 
                   {
                       errMsg += "Enter a valid quantity for confetti \n";
                       result=false;
                   }

                 if(balloon!=""  &&     !balloon.match(/^[1-9][0-9]*$/))
                 
                   {
                       errMsg += "Enter a valid quantity for balloon \n";
                       result=false;
                   }

                 



                  //validation for state and postcode
                  if(state == "VIC")
                  {
                        if(!pcode.match(/^(3|8)[0-9].*$/))
                        {
                        errMsg = errMsg + "State and postcode do not match. \n";
                        result = false;
                        }
                  }
                  else if(state == "NSW")
                  {
                        if(!pcode.match(/^(1|2)[0-9].*$/))
                        {
                        errMsg = errMsg + "State and postcode do not match. \n";
                        result = false;
                        }
                  }
                  else if(state =="QLD")
                  {
                        if(!pcode.match(/^(4|9)[0-9].*$/))
                        {
                               errMsg = errMsg + "State and postcode do not match. \n";
                               result = false;
                        }
                  }
                  else if(state=="NT")
                  {
                        if(!pcode.match(/^0[0-9].*$/))
                        {
                              errMsg = errMsg + "State and postcode do not match. \n";
                              result = false;
                        }
                  }
                  else if(state =="WA")
                  {
                        if(!pcode.match(/^6[0-9].*$/))
                        {
                              errMsg = errMsg + "State and postcode do not match. \n";
                              result = false;
                        }
                  }
                  else if(state =="SA")
                  {
                        if(!pcode.match(/^5[0-9].*$/))
                        {
                              errMsg = errMsg + "State and postcode do not match. \n";
                              result = false;
                        }
                  }
                  
                  else if(state =="TAS")
                  {
                        if(!pcode.match(/^7[0-9].*$/))
                        {
                              errMsg = errMsg + "State and postcode do not match. \n";
                              result = false;
                        }
                  }
                  else if(state =="ACT")
                  {
                         if(!pcode.match(/^0[0-9].*$/))
                         {
                              errMsg = errMsg + "State and postcode do not match. \n";
                              result = false;
                        }
                  }
                  
                  




                 if(errMsg!="")
                  {
                
                        alert(errMsg);
                   
                  }
*/

                saveData(firstName,lastName,street,suburb,state,pcode,mobile,contact1,contact2,contact3,email,PartyEquipment_list,CandleType1,CandleType2,CandleType3,BalloonType1,BalloonType2,BalloonType3,SpeakerType1
                ,SpeakerType2,SpeakerType3,LightType1,LightType2,LightType3,ConfettiType1,ConfettiType2,ConfettiType3,candle,speaker,confetti,light,balloon,cost,complaints,feedback);


                // return result;

              }




//VALIDATING THE SECOND FORM{PAYMENT.HTML}
          
            function validateForm2() 
       
       {
          
          
            var errMsg = "";
            var result = true;
            
            var creditcard_num=document.getElementById("Cnumber").value;
            var creditcard_cvvnum=document.getElementById("CVV").value;
            var creditcard_expire=document.getElementById("Cexpiry").value;
            var creditcard_options = document.getElementById("CREDIT").options[document.getElementById("CREDIT").selectedIndex].text;
          // var creditcard_num=document.getElementById("Cnumber").value;
            var creditcard_name=document.getElementById("Cname").value;
           
                 
           
               //validation for  card type and credit card number
             /*  switch (creditcard_options) 
              {
                
                case "VISA":

                if(!creditcard_num.match(/^4[0-9]{15}$/))
                {


                errMsg = errMsg + "Credit card type and Number do not match. \n";
                result = false;


                }
                break;
                case "MASTERCARD":
                if(!creditcard_num.match(/^(51|52|53|54|55)[0-9]{14}$/))
                {


                errMsg = errMsg + "Credit card type and Number do not match. \n";
                result = false;


               }
               break;     
               case "AMERICAN EXPRESS":
               if(!creditcard_num.match(/^(34|37)[0-9]{13}$/))
               {


               errMsg = errMsg + "Credit card type and Number do not match. \n";
               result = false;


                } 
               break;

            }

     
           //Validation for CVV number

          if(creditcard_options == "VISA")
          {

              if(!creditcard_cvvnum.match(/^[0-9]{3}$/))

              {
                  errMsg = errMsg + "Credit card type and CVV do not match. \n";
                  result=false;


              }
            
          }
          else if (creditcard_options == "MASTERCARD")
          {

              if(!creditcard_cvvnum.match(/^[0-9]{3}$/))

              {
                  errMsg = errMsg + "Credit card type and CVV do not match. \n";
                  result=false;


              }
            
          }
          
          else if (creditcard_options == "AMERICAN EXPRESS")
          {

              if(!creditcard_cvvnum.match(/^[0-9]{4}$/))

              {
                  errMsg = errMsg + "Credit card type and CVV do not match. \n";
                  result=false;


              }
            
      }



           



             



                 if(errMsg!="")
                  {
                
                        alert(errMsg);
                   
                  }*/
                 // return result;
                  



}
         



               function retrieveData(){
              if(typeof(Storage)!=="undefined"){
              if(sessionStorage.firstName!=undefined){

             //ENHANCEMENT 2
               document.getElementById("Cname").value=sessionStorage.firstName.concat(sessionStorage.lastName); 








               //RETIEVING DATA ON THE PAYMENT PAGE
              document.getElementById("firstname_info").textContent=sessionStorage.firstName;
              document.getElementById("S1").value=sessionStorage.firstName;

              document.getElementById("lastname_info").textContent=sessionStorage.lastName;
              document.getElementById("S2").value=sessionStorage.lastName;

              document.getElementById("street_info").textContent=sessionStorage.street;
              document.getElementById("S3").value=sessionStorage.street;

              document.getElementById("suburb_info").textContent=sessionStorage.suburb;
              document.getElementById("S4").value=sessionStorage.suburb;
             
              document.getElementById("state_info").textContent=sessionStorage.state;
              document.getElementById("S5").value=sessionStorage.state;
  
              document.getElementById("postcode_info").textContent=sessionStorage.pcode;
              document.getElementById("S6").value=sessionStorage.pcode;
             
              document.getElementById("mobile_info").textContent=sessionStorage.mobile;
              document.getElementById("S7").value=sessionStorage.mobile;

              document.getElementById("contact_info").textContent=sessionStorage.contact;
              document.getElementById("S8").value=sessionStorage.contact;
  
              document.getElementById("email_info").textContent=sessionStorage.email;
              document.getElementById("S9").value=sessionStorage.email;

              document.getElementById("TypeEquip").textContent=sessionStorage.PartyEquipment_list;
              document.getElementById("S10").value=sessionStorage.PartyEquipment_list;


              document.getElementById("CandleTY1").textContent=sessionStorage.CandleType1;
              document.getElementById("S11").value=sessionStorage.CandleType1;
               
              document.getElementById("CandleTY2").textContent=sessionStorage.CandleType2;
              document.getElementById("S12").value=sessionStorage.CandleType2;
                
              document.getElementById("CandleTY3").textContent=sessionStorage.CandleType3;
              document.getElementById("S13").value=sessionStorage.CandleType3; 


               
       
              document.getElementById("balloonty1").textContent=sessionStorage.BalloonType1;
              document.getElementById("S14").value=sessionStorage.BalloonType1;
               
              document.getElementById("balloonty2").textContent=sessionStorage.BalloonType2;
              document.getElementById("S15").value=sessionStorage.BalloonType2;
              
              document.getElementById("balloonty3").textContent=sessionStorage.BalloonType3;
              document.getElementById("S16").value=sessionStorage.BalloonType3; 


            

              document.getElementById("speakerty1").textContent=sessionStorage.SpeakerType1;
              document.getElementById("S17").value=sessionStorage.SpeakerType1;
               
              document.getElementById("speakerty2").textContent=sessionStorage.SpeakerType2;
              document.getElementById("S18").value=sessionStorage.SpeakerType2;
              
              document.getElementById("speakerty3").textContent=sessionStorage.SpeakerType3;
              document.getElementById("S19").value=sessionStorage.SpeakerType3; 




              document.getElementById("lightty1").textContent=sessionStorage.LightType1;
              document.getElementById("S20").value=sessionStorage.LightType1;
               
              document.getElementById("lightty2").textContent=sessionStorage.LightType2;
              document.getElementById("S21").value=sessionStorage.LightType2;
              
              document.getElementById("lightty3").textContent=sessionStorage.LightType3;
              document.getElementById("S22").value=sessionStorage.LightType3; 


             

              document.getElementById("confettity1").textContent=sessionStorage.ConfettiType1;
              document.getElementById("S23").value=sessionStorage.ConfettiType1;
               
              document.getElementById("confettity2").textContent=sessionStorage.ConfettiType2;
              document.getElementById("S24").value=sessionStorage.ConfettiType2;
              
              document.getElementById("confettity3").textContent=sessionStorage.ConfettiType3;
              document.getElementById("S25").value=sessionStorage.ConfettiType3; 





              document.getElementById("candle_info").textContent=sessionStorage.candle;
              document.getElementById("S26").value=sessionStorage.candle;
             
              document.getElementById("speaker_info").textContent=sessionStorage.speaker;
              document.getElementById("S27").value=sessionStorage.speaker;
  
              document.getElementById("confetti_info").textContent=sessionStorage.confetti;
              document.getElementById("S28").value=sessionStorage.confetti;

              document.getElementById("light_info").textContent=sessionStorage.light;
              document.getElementById("S29").value=sessionStorage.light;
  
              document.getElementById("balloon_info").textContent=sessionStorage.balloon;
              document.getElementById("S30").value=sessionStorage.balloon;



              document.getElementById("cost_info").textContent=sessionStorage.cost;
              document.getElementById("S31").value=sessionStorage.cost;


              document.getElementById("productQ").textContent=sessionStorage.complaints;
              document.getElementById("S32").value=sessionStorage.complaints;


              document.getElementById("feedback").textContent=sessionStorage.feedback;
              document.getElementById("S33").value=sessionStorage.feedback;
            

            

          
            }
          }
        }











       //SESSION STORAGE


               function saveData(firstName,lastName,street,suburb,state,pcode,mobile,contact1,contact2,contact3,email,PartyEquipment_list,CandleType1,CandleType2,CandleType3,BalloonType1,BalloonType2,BalloonType3,SpeakerType1
                ,SpeakerType2,SpeakerType3,LightType1,LightType2,LightType3,ConfettiType1,ConfettiType2,ConfettiType3,candle,speaker,confetti,light,balloon,cost,complaints,feedback)
            {
              if(typeof(Storage)!=="undefined")
              {

                    sessionStorage.firstName=firstName;
                    sessionStorage.lastName=lastName;
                    sessionStorage.street=street;
                    sessionStorage.suburb=suburb;
                    sessionStorage.state=state;
                    sessionStorage.pcode=pcode;
                    sessionStorage.mobile=mobile;







                  if(contact1){
                    sessionStorage.contact=document.getElementById("contact1").value;
                              }
                  else if(contact2){
                  sessionStorage.contact=document.getElementById("contact2").value;
                    }
                  else {
                  if(contact3){
                  sessionStorage.contact=document.getElementById("contact3").value;
                     }
                   }




                 sessionStorage.email=email;



                  sessionStorage.PartyEquipment_list=PartyEquipment_list;
                  




                    if(CandleType1){
                    sessionStorage.CandleType1 = document.getElementById("candletype1").value;
                                  }

                    else           
                                    { sessionStorage.CandleType1=""; }
                                   

                    if(CandleType2){
                    sessionStorage.CandleType2 = document.getElementById("candletype2").value;
                                   }

                     else          

                                     { sessionStorage.CandleType2=""; }
                                   
                    
                    if(CandleType3) {             
                    sessionStorage.CandleType3 = document.getElementById("candletype3").value;
                                    }

                    else            

                                     { sessionStorage.CandleType3="";  }





                                    


                    if(BalloonType1)  {
                    sessionStorage.BalloonType1 = document.getElementById("balloontype1").value;
                                      }


                      else                         

                                      { sessionStorage.BalloonType1=""; }
                                      
                                      

                       
                    if(BalloonType2) {
                    sessionStorage.BalloonType2 = document.getElementById("balloontype2").value; 
                                     }

                      else           
                                     {  sessionStorage.BalloonType2=""; }
                                      


                     if(BalloonType3) {               
                    sessionStorage.BalloonType3 = document.getElementById("balloontype3").value;
                                      }

                     else            
                                      {  sessionStorage.BalloonType3="";}




                                      


                   if(SpeakerType1) {
                    sessionStorage.SpeakerType1 = document.getElementById("speakertype1").value;
                                    }

                   else            

                                     {    sessionStorage.SpeakerType1="";  }
                  


                    if(SpeakerType2)  {              
                    sessionStorage.SpeakerType2 = document.getElementById("speakertype2").value;
                                      }

                    else              
                                       {   sessionStorage.SpeakerType2="";}


                    if(SpeakerType3){                  
                    sessionStorage.SpeakerType3 = document.getElementById("speakertype3").value;
                                    }


                     else  
                                      {     sessionStorage.SpeakerType3=""; }               









                     if(LightType1) {
                    sessionStorage.LightType1 = document.getElementById("lighttype1").value;
                                    }

                    else           

                                
                                       {  sessionStorage.LightType1 ="";  }


                    if(LightType2) {              
                    sessionStorage.LightType2 = document.getElementById("lighttype2").value;
                                    }

                    else
                                       {  sessionStorage.LightType2 = "";   }


                     if(LightType3)  {              
                    sessionStorage.LightType3 =document.getElementById("lighttype3").value;
                                     }

                     else             {   sessionStorage.LightType3 ="";  }










                    if(ConfettiType1) {
                    sessionStorage.ConfettiType1 = document.getElementById("confettitype1").value;
                                      }

                     else      
                                   {    sessionStorage.ConfettiType1 = ""; }                 

                     if(ConfettiType2){                 
                    sessionStorage.ConfettiType2 = document.getElementById("confettitype2").value;
                                      }


                      else 

                                        {    sessionStorage.ConfettiType2="";    }


                                       
                     if(ConfettiType3) {               
                    sessionStorage.ConfettiType3 =document.getElementById("confettitype3").value;
                                       }

                     else 


                                             {     sessionStorage.ConfettiType3 ="";   }  















                    sessionStorage.candle=candle;
                    sessionStorage.speaker=speaker;
                    sessionStorage.confetti=confetti;
                    sessionStorage.light=light;
                    sessionStorage.balloon=balloon;

                    cost=cost+250*sessionStorage.candle;
                    cost=cost+2500*sessionStorage.speaker;
                    cost=cost+180*sessionStorage.confetti; 
                    cost=cost+300*sessionStorage.light;
                    cost=cost+200*sessionStorage.balloon;
                    sessionStorage.cost = cost;
      


                    sessionStorage.complaints  = complaints;
                    sessionStorage.feedback  = feedback;

               } 


             }

                  

       //RESET BUTTON{IT WILL REDIRECT YOU TO THE HOME PAGE}
       
               function cancelorder()
               {


                window.location = "index.html";
               }








                  function init() 
                  {
                  var clickMe = document.getElementById("reset");

                   clickMe.onclick = cancelorder;
                  

                  
                  if(document.getElementById("enquirypage")!=null)
                  {
                  var Form1= document.getElementById("form1");
                  Form1.onsubmit= validateForm1; 
                  }
                  else if(document.getElementById("Paymentpage")!=null)
                  {
                  retrieveData();
                  var Form2= document.getElementById("form2");
                  Form2.onsubmit= validateForm2; 
                  }

                }







window.onload= init;