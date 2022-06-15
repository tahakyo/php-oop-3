<?php
    trait adress {
      public $street;
      public $city;
      public $adress_number;

      public function setAdress($_street, $_city, $_adress_number) {
        $this->street = $_street;
        $this->city = $_city;
        $this->adress_number = $_adress_number;
      }

      public function getAdress() {
        return "$this->street, $this->city, $this->adress_number";
      }
    }
?>