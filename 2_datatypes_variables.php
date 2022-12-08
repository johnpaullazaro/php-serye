<?php
    
     //Variable Rules
     //Must starts with the $ sign 
     //Must start with letter or underscore 
     //Cannot start with a number
     //Can only contain(A-z, 0-9, and _ )
     //Case-sensitive ($age and $AGE are different)

    
     //Data Types
     //string  //integer   //float
     //Array  //Object //Null //Resource
     
     $_product = "ipad"; 
     $_product_version = 10;
     $_product_price = 50000.00;
     $_product_colors = ['red','grey','gold'];
     $_product_null = null;

     echo $_product,$_product_version  
     ,$_product_price  
    , $_product_colors[0]  
     ,$_product_null;
?>