<?php
    require_once __DIR__. "/product.php";

    class toy extends product {
      public $color;

      function __construct($_brand, $_description, $_price, $_color)
      {
          parent::__construct($_brand, $_description, $_price);
          $this->color = $_color;
      }

      public function getInfo()
      {
        return "$this->brand <br> $this->description <br> $this->color <br> $this->price €";
      }
    }
?>