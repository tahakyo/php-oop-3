<?php
    require_once __DIR__ . "/product.php";

    class food extends product {
      public $weight;

      function __construct($_brand, $_description, $_price, $_weight)
      {
        parent::__construct($_brand, $_description, $_price);
        $this->weight = $_weight;
      }

      public function getInfo() {
        return "$this->brand <br> $this->description <br> $this->weight <br> $this->price €";
      }
    }
?>