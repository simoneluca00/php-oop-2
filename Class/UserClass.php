<?php

require __DIR__ . "/traits/userInfo.php";


class User {
    
    use UserInfo;

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

        if ($_cardValidThru >= $currentDate) {
            $_cardValidThru = "può effettuare il pagamento"; 
        } else {
            $_cardValidThru = "non può effettuare il pagamento perchè la carta è scaduta";

            // NOTE exception nel caso in cui la carta dell'utente è scaduta
            throw new Exception ("L'utente non può effettuare il pagamento perchè la carta è scaduta");
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