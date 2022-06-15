<?php
  require_once __DIR__. "/adress.php";
    class user {
      use adress;
      public $name;
      public $lastName;
      public $mail;
      public $cart = [];
      public $cc_valid;
      public $membership;
      public $discount = 0.2;

      function __construct($_name, $_lastName, $_mail, $_cc_valid, $_membership)
      {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->mail = $_mail;
        $this->cc_valid = $_cc_valid;
        $this->membership = $_membership;
      }

      public function getUserInfo() {
        return "$this->name $this->lastName";
      }
      function addToCart($_product) {
        $this->cart[] = $_product;
      }
      // public function setDiscount() { 
      //   if ($this->membership = true) {
      //     $this->discount = 20;
      //   }else {
      //     $this->discount = 0;
      //   }

      // }
      function getTotalPrice() {
        $total_price = 0;
        if($this->membership === true) {
          foreach ($this->cart as $cartItem) {
            $total_price += $cartItem->price;
          }
          return $total_price - ($total_price * $this->discount);
        }else {
          foreach ($this->cart as $cartItem) {
            $total_price += $cartItem->price;
          }
          return $total_price;
        }
      }
      function paymentCheck() {
        if($this->cc_valid === true) {
          return "Pagamento effetutato con successo tramite carta di credito";
        }else {
          return "Transazione negata: Carta di credito non valida";
        }
      }
    }
?>