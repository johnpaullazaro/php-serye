<?php
 
  //Object Oriented Programming
  //Syntax 
  //class Person {
  //  public $name;
  //  public $age;
  //  function set_name($name) { $this->name=$name;  }
  //}

    class Person {
       public $name;
       public $age;
       public $gender;
       function getName() {
          return $this->name;
       }
    }
    
    $jp = new Person();
    $jp->name = "JP";
    $jp->age = 22;

   // echo $jp->getName();


    class Student extends Person {
        public $studentid;
    }
 
    $hopie = new Student(); 
    $hopie->name = "Hopie";

    echo $hopie->getName();
    echo $hopie->getName();

    
  //Instantiate
  //$person = new Person();
  //Accessiblity 
  //$person->name 
  

  //Inheritance
  // class Student extends Person 
  // 
?>
