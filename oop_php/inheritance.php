<?php

 class Shape {
    

    public function getArea(){
      return 0.0;
    }

}

 class rectangle extends Shape{

    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return round($this->width * $this->height,2) ;
    }


   


}

 class circle extends Shape {
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        return round($this->radius * $this->radius * pi(),2) ;
    }



}

$rectangle = new rectangle(10, 2);
$circle  = new circle(3);
echo 'this is rectangale '. $rectangle->getArea();
str_repeat('&nbsp;', 5);
echo 'this is circle '. $circle->getArea();
?>

