<?php
     
    //$fruits = ["apple","banana","orange"];
   // $fruits = array("apple","banana","orange");
   // echo $fruits[2];

   //Associative Array
   $person = [
        'firstname' => 'JP',
        'age' => 22,
        'city' => 'Manila'
   ];

  // echo $person['firstname'];
     
    //multi di Array
    $people = [
        ['JP',  22, 'Manila'],
        ['mica', 12, 'Paris'] 
   ];
   
   echo $people[0][0]."<br>";
   echo $people[1][0]."<br>";

?>