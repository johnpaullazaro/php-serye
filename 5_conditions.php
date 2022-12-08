<?php
    
    //Comparison Operators
    // <, >, <= >=, ==, ===,
    // != , !==  
    
    // Logical Conditions
    // 1. If else  
    // Syntax : if($name=="JP") 
    // { do if true } else {
    //    do if false
    // }
        
   //   $age = 78;
    //   if($age <= 7) {
    //     echo "Baby";
    //   }  
    //   else if($age == 18) {
    //     echo "Youth";
    //   }
    //   else
    //   {
    //     echo "Old"; 
    //   }
 
    // 2. Ternary
    // ($age >= 40) ? "Old" : "Young.";
    $age = 60;
     //echo ($age < 60) ? "Not senior" : "Senior";

        
    // 3. Switch 
    // $birthmonth = "september"; 
    // switch ($birthmonth) {
    // case "september":
    //     echo "Your favorite color is red!";
    //     break; 
    // default:
    //     echo "";
    // }

      switch("february")  {
        case "september" :
             echo "your birth month is september"; 
             break;
        case "october" :
             echo "your birth month is october";
             break;
        case "february" :
                echo "your birth month is february";
                break;
        default :
            echo "birth month not found";

      }


?>