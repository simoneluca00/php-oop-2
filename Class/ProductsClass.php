<?php

class PetProducts {
    protected $brand;
    protected $description;
    protected $price;
    protected $animalType;

    // Costruttore
    public function __construct( $_brand, $_description, $_price, $_animalType ) {
        $this -> setBrand( $_brand );
        $this -> setDescription( $_description );
        $this -> setPrice( $_price );
        $this -> setAnimalType( $_animalType );
    }

    // Setter
    public function setBrand( $_brand ){
        $this -> brand = $_brand;
        return $this;
    }

    public function setDescription( $_description ){
        $this -> description = $_description;
        return $this;
    }

    public function setPrice( $_price ){
        $this -> price = $_price;
        return $this;
    }

    public function setAnimalType( $_animalType ){
        $this -> animalType = $_animalType;
        return $this;
    }

    // Getter 
    public function getBrand(){
        return $this -> brand;
    }

    public function getDescription(){
        return $this -> description;
    }

    public function getPrice(){
        return $this -> price;
    }

    public function getAnimalType(){
        return $this -> animalType;
    }

}

?>