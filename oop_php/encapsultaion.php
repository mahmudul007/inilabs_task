<?php

class Employee{
    public $name;
    private $salary;

    public function __construct($name, $salary){
        $this->name = $name;
        $this-> setSalary ($salary);
    
   }

    public function getSalary(){
         return $this->salary;
    }

    public function setSalary($salary){
        if($salary >0){
            $this->salary = $salary;
        }
        else{
            echo "Invalid salary";
        }
      

    }
    public function getName(){
        return $this->name;
    }
}

$emp1 = new Employee("Rahim", -1);

echo $emp1->getName();
echo $emp1->getSalary();

  




?>