<?php 

    // ARRAY FUNCTIONS
    $products = ['Ipad','Iphone','MacBookAir'];

    //1.Count 
    //count($arrayname)
    //echo count($products);

    //2.Search
    //in_array('searchvalue',$arrayname);
    //echo in_array('Ipad',$products);
    //echo (in_array('Iphone',$products)) ? "Found" : "Not Found";

    //3.ADD to end
    //array_push($arrayname,'newitem');
    //array_push($products,'Mac Book Pro');
    



    //4.ADD to start
    //array_unshift($arrayname,'newitem');
    // array_unshift($products,'Airpods');
    // var_dump($products);



    //5.Delete item from end
    //array_pop($arrayname);
    // array_pop($products);
    
    //6.Delete item from start
    //array_shift($arrayname);
    //array_shift($products);
   

    //7. Delete specific
    //unset($arrayname[0]);
    
    //unset($products[2]);
    //var_dump($products);


    //8. Array Combine
    //array_merge()
    
    //$products2 = ['Macbook PRO','Mac mini'];
    //$AllProducts = array_merge($products,$products2);
    //var_dump($AllProducts);
?>