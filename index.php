<!-- Error detector -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- Error detector -->


<?php
    require_once __DIR__. "/product.php";
    require_once __DIR__. "/food.php";
    require_once __DIR__. "/accessory.php";
    require_once __DIR__. "/toy.php";
    require_once __DIR__. "/user.php";

    // products

    $catFood = new food("Royal canin", "Umido per gatti gusto tonno e formaggio", 1.19, "85gr");
    $dogFood = new food("Natural Trainer", "Croccantini per cane gusto anatra e patate", 9.99, "750gr");
    $catToy = new toy("cinesata", "Gioco d'intelligenza con due gradi di difficoltà", 2.50, "Rosso");
    $dogAccessory = new accessory("Elastofit", "Gilet rinfrescante", 30 , "PVA");

    // Users

    $taha = new user("Taha", "Ghazouani", "taha@gmail.com", true, true);
    $taha-> addToCart($catFood);
    $taha-> addToCart($catToy);
    $taha-> addToCart($dogAccessory);
    // var_dump($taha);
    $casualMember = new user("aassd", "aaawwwq", "dsadasd@mail.com", false, false);
    $casualMember-> addToCart($dogFood);
    $casualMember-> addToCart($catFood);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
    <h1>Lista prodotti:</h1>
    <ul>
      <li><?php echo $catFood->getInfo()?></li>
      <li><?php echo $dogFood->getInfo()?></li>
      <li><?php echo $catToy->getInfo()?></li>
      <li><?php echo $dogAccessory->getInfo()?></li>
    </ul>
  </body>
  </section>
  <!-- Cliente registrato -->
  <section>
    <h1>Carrello cliente <?php echo $taha->getUserInfo() ?></h1>
    <ul>
      <?php foreach($taha->cart as $cartItem) { ?>
        <li><?php echo $cartItem->getInfo(); ?></li>
        
      <?php } ?>
    </ul>
    <h3>Totale acquisti: € <?php echo $taha->getTotalPrice() ?> </h3>
    <h4>Metodo di pagamento: <?php echo $taha->paymentCheck() ?></h4>
  </section>
  <!-- cliente non registrato -->
  <section>
  <h1>Carrello cliente <?php echo $casualMember->getUserInfo() ?></h1>
    <ul>
      <?php foreach($casualMember->cart as $cartItem) { ?>
        <li><?php echo $cartItem->getInfo(); ?></li>
        
      <?php } ?>
    </ul>
    <h3>Totale acquisti: € <?php echo $casualMember->getTotalPrice() ?> </h3>
    <h4>Metodo di pagamento: <?php echo $casualMember->paymentCheck() ?></h4>
  </section>
</html>