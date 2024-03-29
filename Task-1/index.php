<?php
abstract class Shape {
    abstract public function areaCalculate();
}

// Class for calculating area of a rectangle
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function areaCalculate() {
        return $this->length * $this->width;
    }
}

// Class for calculating area of a circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
        
    }

    public function areaCalculate() {
        return 3.14* $this->radius * $this->radius;
    }
}


// For calculating area of rectangle
$rectangle = new Rectangle(6, 8);
echo "Area of the Rectangle: " . $rectangle->areaCalculate() . "</br>";


// For calculating area of circle
$rad = new Circle(5);
echo "Area of the Circle: " . $rad->areaCalculate() . "</br>";

?>