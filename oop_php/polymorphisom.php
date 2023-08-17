<?php
class Animal {
    
    public function Sound(){
        return 'this is animal sound';
    }
}

class Dog extends Animal{
    public function Sound(){
        return 'this is dog sound';
    }
}
class Cat extends Animal{
    public function Sound(){
        return 'this is cat sound';
    }
}

$dog = new Dog();
echo $dog->Sound();
str_repeat('&nbsp;', 5);
$cat = new Cat();
echo $cat->Sound();


?>