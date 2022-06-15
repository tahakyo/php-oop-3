<?php
  class product {
    public $brand;
    public $description;
    public $price;
    public $disponibile = true;

    function __construct($_brand, $_description, $_price) {
      $this->brand = $_brand;
      $this->description = $_description;
      $this->price = $_price;
    }
    public function getInfo(){
      return "$this->brand <br> $this->description <br> $this->price €";
    }
  }
?>