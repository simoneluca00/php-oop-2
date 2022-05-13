<?php

trait UserInfo {
    protected $name;
    protected $lastName;
    protected $email;

    // Setter
    public function setName( $_name ){
        $this -> name = $_name;
        return $this;
    }

    public function setLastName( $_lastName ){
        $this -> lastName = $_lastName;
        return $this;
    }

    public function setEmail( $_email ){
        $this -> email = $_email;
        return $this;
    }

    // Getter 
    public function getName(){
        return $this -> name;
    }

    public function getLastName(){
        return $this -> lastName;
    }

    public function getEmail(){
        return $this -> email;
    }
}

?>