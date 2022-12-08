<?php
      
    //String Concatenation 
    // use "." 
    // use string literals ${name} 
    
    $_product = "ipad"; 
    $_product_version = 10;
    $_product_price = 50000.00;
    $_product_colors = ['red','grey','gold'];
    
    //echo "My ".$_product." is ".$_product_colors[0];
    echo "My ${_product} is ${_product_price} php";
     
?>  