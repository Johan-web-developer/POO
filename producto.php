<?php 
class Peripherals{
    public $name ;
    public $category;
    public $price;
    public $size;
    public $color;
    public $material;
    public $texture;

/*     public function __construct($name, $category, $price, $size, $color, $material, $texture){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->size = $size;
        $this->color = $color;
        $this->material = $material;
        $this->texture = $texture;
} */

//method Getterer
    public function getCategory(){
        return $this->category;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getSize(){
        return $this->size;
    }
    public function getColor(){
        return $this->color;
    }
    public function getMaterial(){
        return $this->material;
    }
    public function getTexture(){
        return $this->texture;
    }

//method Setters//
    public function setCategory($category){
        $this->category = $category;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setSize($size){
        $this->size = $size;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setMaterial($material){
        $this->material = $material;
    }
    public function setTexture($texture){
        $this->texture = $texture;
    }   
}

//Instance of class//
$keyboards = new Peripherals();
$keyboards->setCategory('Keyboards');
$keyboards->setPrice("150 COP");
$keyboards->setSize("40cm");
$keyboards->setColor("RGB");
$keyboards->setMaterial("plastic");
$keyboards->setTexture("smooth");
echo $keyboards->getCategory()."<br>";
echo $keyboards->getPrice()."<br>";
echo $keyboards->getSize()."<br>";
echo $keyboards->getColor()."<br>";
echo $keyboards->getMaterial()."<br>";
echo $keyboards->getTexture()."<br> <br> <br>";


$Mouses = new Peripherals();
$Mouses->setCategory('Mouse');
$Mouses->setPrice("100 COP");
$Mouses->setSize("10cm");
$Mouses->setColor("RGB");
$Mouses->setMaterial("plastic");
$Mouses->setTexture("corrugated");
echo $Mouses->getCategory()."<br>";
echo $Mouses->getPrice()."<br>";
echo $Mouses->getSize()."<br>";
echo $Mouses->getColor()."<br>";
echo $Mouses->getMaterial()."<br>";
echo $Mouses->getTexture()."<br> <br> <br> <br>";


$headbandheadphones = new Peripherals();
$headbandheadphones->setCategory('Headphone of Logitech');
$headbandheadphones->setPrice("300 COP");
$headbandheadphones->setSize("60cm");
$headbandheadphones->setColor("RGB");
$headbandheadphones->setMaterial("plastic");
$headbandheadphones->setTexture("smooth");
echo $headbandheadphones->getCategory()."<br>";
echo $headbandheadphones->getPrice()."<br>";
echo $headbandheadphones->getSize()."<br>";
echo $headbandheadphones->getColor()."<br>";
echo $headbandheadphones->getMaterial()."<br>";
echo $headbandheadphones->getTexture()."<br> <br> <br> <br>";


$displayunit = new Peripherals();
$displayunit->setCategory('display of 165hz');
$displayunit->setPrice("300000 COP");
$displayunit->setSize("120cm");
$displayunit->setColor("black");
$displayunit->setMaterial("metal");
$displayunit->setTexture("smooth");
echo $displayunit->getCategory()."<br>";
echo $displayunit->getPrice()."<br>";
echo $displayunit->getSize()."<br>";
echo $displayunit->getColor()."<br>";
echo $displayunit->getMaterial()."<br>";
echo $displayunit->getTexture()."<br> <br> <br> <br>";


/* $peripherals = new Peripherals("Microphone", "input device", "200000 COP", "70cm", "Black", "Plastic and metal", "smooth",); */

?>