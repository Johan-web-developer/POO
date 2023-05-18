<?php 
class Camper{
    //1. Atributos  con  modificaciones de acceso 
    // Private, public, protected
    public $name ;
    public $email  ;
    public $phone  ;
    //2. Constructor (metodo magico) 
/*     public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    } */
    //3. Methods (Getters,Setters )    
    public function getName() {
         return $this->name; 
        }
    public function getEmail() {
            return $this->email; 
           }

    public function getPhone() {
            return $this->phone; 
           }
    // Methods Setters//
    public function setName($name) {
        $this->name = $name;  
    }
    public function setEmail($email) {
        $this->email = $email; 
    }
    public function setPhone($phone) {
        $this->phone = $phone; 
    }
}

 // Instancias de la clase// 
/*  "Johan", "johan@example.com", "3209090220" */
$camper = new Camper();
$camper -> setName('Maicol');
$camper -> setEmail('maicol@example.com');
$camper -> setPhone('3209090220');
echo $camper -> getName() . "<br>";
echo $camper-> getEmail() ."<br>"; 
echo $camper-> getPhone() 

?>