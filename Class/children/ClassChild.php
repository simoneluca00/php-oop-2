<?php

include_once __DIR__ . '/../ProductsClass.php';

// template classe per prodotto "cibo"
class Food extends PetProducts {

    protected $ingredients;
    protected $foodTypology;

    // Costruttore
    public function __construct( $_brand, $_description, $_price, $_animalType, $_ingredients, $_foodTypology ){
        parent::__construct( $_brand, $_description, $_price, $_animalType );

        $this -> setIngredients( $_ingredients );
        $this -> setFoodTypology( $_foodTypology );
    }

    // Setter
    public function setIngredients( $_ingredients ){
        $this -> ingredients = $_ingredients;
        return $this;
    }

    public function setFoodTypology( $_foodTypology ){
        $this -> foodTypology = $_foodTypology;
        return $this;
    }

    // Getter 
    public function getIngredients(){
        return $this -> ingredients;
    }

    public function getFoodTypology(){
        return $this -> foodTypology;
    }
}

// template classe per prodotto "giochi"
class Toys extends PetProducts {

    protected $material;
    protected $color;
    protected $weightGr;

    // Costruttore
    public function __construct( $_brand, $_description, $_price, $_animalType, $_material, $_color, $_weightGr ){
        parent::__construct( $_brand, $_description, $_price, $_animalType );

        $this -> setMaterial( $_material );
        $this -> setColor( $_color );
        $this -> setWeightGr( $_weightGr );
    }

    // Setter
    public function setMaterial( $_material ){
        $this -> material = $_material;
        return $this;
    }

    public function setColor( $_color ){
        $this -> color = $_color;
        return $this;
    }

    public function setWeightGr( $_weightGr ){
        $this -> weightGr = $_weightGr;
        return $this;
    }

    // Getter 
    public function getMaterial(){
        return $this -> material;
    }

    public function getColor(){
        return $this -> color;
    }

    public function getWeightGr(){
        return $this -> weightGr;
    }
}

?>