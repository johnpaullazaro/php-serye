<?php 

    // ARRAYS

    // 1.Simple Array 
    // Syntax : $arrayname = [value1,value2,value3];

    //$years = [2022,2023,2024];
 
    // Another way to create an Array
    // Syntax : array(value1,value2,value3);
   //$years = array(2022,2023,2024);
   //var_dump($years);
    
   // 2.Associative Array 
   // Syntax : $arrayname = ['key1' => 'valueKey1', 
   //         'key2' => 'valueKey2'];
   // Accesibility : $arrayname['key1'];
     
   // $product = [ 
   //    'name' => 'Ipad', 
   //    'price' => 58000.00, 
   // ];

   // echo $product['price'];





   // 3.Multi-Dimensional Array
   // Syntax : $arrayname = [ 
      // ['row1value1','row1value2','row1value3'] ,
      // ['row2value1','row2value2','row2value3']   
   //  ];
   // Accesibility : $arrayname[0][0];

      // $products = [
      //    ['Ipad', 58000.00, 'Red'],
      //    ['Iphone 14', 80000.00, 'Black'],
      //    ['Apple TV', 10000.00, 'Silver'] 
      // ];

      $products = array(
         array('Ipad', 58000.00, 'Red'),
         array('Iphone 14', 80000.00, 'Black'),
         array('Apple TV', 10000.00, 'Silver')
      );

     echo $products[2][0].'-'.$products[2][1].'<br>';
     echo $products[1][0].'-'.$products[1][1].'<br>';
 
    // Syntax : $arrayname = array (
    //    array('row1value1','row1value2'),
    //    array('row2value1','row2value2'),
    //    array('row3value1','row3value2') 
    // );
   // Accesibility : $arrayname[0][0];
    
?>