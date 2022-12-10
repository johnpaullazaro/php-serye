<?php
 
  // COOKIE
  // information stored in browser

  //Creating Cookie
  //Syntax 
  //setcookie('name','JP',time() + 86400); //1 Day = 86400
  
  //setcookie('theme','dark',time() + 86400);
   


  //isset($_COOKIE['name'])
  //Accessbilty 
  
   if(isset($_COOKIE['theme'])){ 
      if($_COOKIE['theme']=='dark')
      {
         echo "<style>body 
         {background-color:black;color:white;}</style>"; 
      } 
   };



  // $_COOKIE[''];
 
  
  //Delete Cookie
    
?>
