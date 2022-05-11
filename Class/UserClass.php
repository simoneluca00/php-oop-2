<?php

class User {
    protected $name;
    protected $lastName;
    protected $email;
    protected $siteMember;
    protected $cardValidThru;
    protected $discount;

    // Costruttore
    public function __construct( $_name, $_lastName, $_email, $_siteMember, $_cardValidThru ) {
        $this -> setName( $_name );
        $this -> setLastName( $_lastName );
        $this -> setEmail( $_email );
        $this -> setSiteMember( $_siteMember );
        $this -> setCardValidThru( $_cardValidThru );
        $this -> setDiscount( $_siteMember );
    }

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

    public function setSiteMember( $_siteMember ){

        if ($_siteMember === true) {
            $_siteMember = "può usufruire dello sconto del 20%";
        } else {
            $_siteMember = "non può usufruire dello sconto del 20%";
        }

        $this -> siteMember = $_siteMember;
        return $this;
    }

    public function setCardValidThru( $_cardValidThru ){

        $currentDate = date("Y-m-j");

        if ($_cardValidThru < $currentDate) {
            $_cardValidThru= "non può effettuare il pagamento perchè la carta è scaduta";
        } else {
            $_cardValidThru= "può effettuare il pagamento"; 
        }

        $this -> cardValidThru = $_cardValidThru;
        return $this;
    }

    public function setDiscount( $_siteMember ){

        if ($_siteMember === true) {
            $this -> discount = 0.8;
        } else if ($_siteMember === false){
            $this -> discount = 1;
        } 
        

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

    public function getSiteMember(){
        return $this -> siteMember;
    }

    public function getCardValidThru(){
        return $this -> cardValidThru;
    }

    public function getDiscount(){
        return $this -> discount;
    }

}

?>