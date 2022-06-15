<?php
    require_once __DIR__. "/product.php";
    require_once __DIR__. "/accountingProduct.php";

    class accessory extends product {
      use accountingProduct;
      public $material;

      function __construct($_brand, $_description, $_price, $_material)
      {
          parent::__construct($_brand, $_description, $_price);
          $this->material = $_material;
      }
      public function getInfo()
      {
        return "$this->brand <br> $this->description <br> $this->material <br> $this->price €";
      }
    }
?>