<?php
    trait accountingProduct {
      public $invoice_number;
      public $iva;

      public function setAccountinProduct($_invoice_number, $_iva) {
        $this->invoice_number = $_invoice_number;
        $this->iva = $_iva;
      }

      public function getAdress() {
        return "$this->invoice_number, $this->iva";
      }
    }
?>