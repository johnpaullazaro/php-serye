<?php
     
    $studentid = "BSIT-2022-001"; 

    // strlen($string)
    //echo strlen($studentid);
    
    // Reverse
    // strrev($string)
    //echo strrev($studentid);


    // strtolower($string)
    //echo strtolower($studentid);

    // strtoUpper($string)

    // REPLACE
    // str_replace('want','replacement',$string)
    //echo str_replace("BSIT","BSCS",$studentid);

    //BSIT-2022-001
    // substr($string, 0, 5);
    //echo substr($studentid,0,4);
    //echo substr($studentid,5,4);



    // str_ends_with($string,'a');

    // str_starts_with($string,'a'); 
    //echo str_starts_with($studentid,'BSIT');

    ///echo  "<script>alert('error');</script>";

    echo htmlspecialchars("<script>alert('error');</script>");
     
?>