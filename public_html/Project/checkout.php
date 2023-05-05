
<?php
require(__DIR__ . "/../../partials/nav.php"); ?>
<?php
if (!is_logged_in()) {
  flash("You must be logged in to access this page");
  die(header("Location: login.php"));
}

?>

<?php
$userID = get_user_id();
$results = [];
$subtotal = 0;
$address = "";
$paymentMethod = 0;
$hasError = false;
$orderID = 0;
$quantity= se($_GET, "quantity", -1, false);
$firstname = "";
$lastname = "";
$moneyreceived=0;


$db = getDB();
$stmt = $db->prepare("SELECT cart.unit_cost, name, product_id, cart.id, cart.desired_quantity From cart JOIN products on cart.product_id = products.id where cart.user_id=:user_id LIMIT 10");
$r = $stmt->execute([":user_id" => $userID,]);
if ($r) {
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
  flash("There was a problem fetching the results " . var_export($stmt->errorInfo(), true));
}

$db = getDB();
$stmt = $db->prepare("SELECT cart.unit_cost, products.unit_price, cart.desired_quantity, products.name, cart.id, cart.product_id FROM cart JOIN products ON cart.product_id = products.id WHERE cart.user_id = :user_id LIMIT 10");
$r = $stmt->execute([":user_id" => $userID]);
if ($r) {
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($results as $row) {
    $unit_cost = $row['unit_cost'];
    $unit_price = $row['unit_price'];
    $name = $row['name'];
    $product_id = $row['product_id'];
    $desired_quantity = $row['desired_quantity'];
    
    // Check if unit cost matches unit price, with tolerance of 0.01
    if (abs($unit_cost - $unit_price) > 0.01) {
      $diff_percentage = abs($unit_cost - $unit_price) / $unit_price * 100;
      flash(" The unit cost of {$name} in your cart differs from its current unit cost by {$diff_percentage}%");
      $hasError = true;
    }
  }
} else {
  flash("There was a problem fetching the results " . var_export($stmt->errorInfo(), true));
}

if (isset($_POST["firstname"])) {
  if (empty($_POST["firstname"])) {
    $hasError = true;
    flash("There was a problem with Firstname");
  }
}
if (isset($_POST["lastname"])) {
  if (empty($_POST["lastname"])) {
    $hasError = true;
    flash("There was a problem with Lastname");
  }
}
if (isset($_POST["email"])) {
  if (empty($_POST["email"])) {
    $hasError = true;
    flash("There was a problem with Email");
  }
}
//mm2654 5/5/2023
if (isset($_POST["address"])) {
  if (empty($_POST["address"])) {
    $hasError = true;
    flash("There was a problem with Address ");
  }
}
if (isset($_POST["city"])) {
  if (empty($_POST["city"])) {
    $hasError = true;
    flash("There was a problem with city ");
  }
}
if (isset($_POST["state"])) {
  if (empty($_POST["state"])) {
    $hasError = true;
    flash("There was a problem with state");
  }
}
if (isset($_POST["zip"])) {
  if (empty($_POST["zip"])) {
    $hasError = true;
    flash("There was a problem with zip");
  }
}


if (isset($_POST["moneyreceived"])) {
  if (empty($_POST["moneyreceived"])) {
    $hasError = true;
    flash("There was a problem with moneyreceived");
  }
}



//mm2654 5/5/2023
if (isset($_POST["paymenttype"])) {
  if (empty($_POST["paymenttype"])) {
    $hasError = true;
    flash("There was a problem with payment type");
  }
}



if (count($_POST) > 0 && !$hasError) { //don't need to check again if you swap how the boolean works
  // this is likely longer than your db column $address= $_POST["firstname"]. " " . $_POST["email"]. " ". $_POST["address"]. " ". $_POST["city"]. " ". $_POST["state"]. " ". $_POST["zip"];
  error_log("No error post: " . var_export($_POST, true));
  $address = $_POST["address"] . ", " . $_POST["city"] . ", " . $_POST["state"] . ", " . $_POST["zip"];
  $subtotal = $_POST["subtotal"];
  $paymentMethod = $_POST["paymenttype"];
  $first_name = $_POST["firstname"];
  $last_name = $_POST["lastname"];
  $money_received = $_POST["moneyreceived"];
  
  $stmt = $db->prepare("INSERT into orders(user_id, total_price, payment_method, address, first_name, last_name, money_received) VALUES (:userID, :price, :pmethod, :addr, :firstname, :lastname, :moneyreceived)");
  $r = $stmt->execute([
    ":userID" => $userID,
    ":addr" => $address,
    ":pmethod" => $paymentMethod,
    ":price" => $subtotal,
    ":firstname" => $first_name,
    ":lastname" => $last_name,
    ":moneyreceived" => $money_received
  ]);



  $db = getDB();
  $orderID = $db->lastInsertId();
  $stmt = $db->prepare("INSERT into OrderItems (product_id, user_id, quantity, unit_price, order_id) 
         SELECT product_id, user_id, desired_quantity, unit_cost, :order_id FROM cart 
         where user_id = :userID");
  try {
    $r = $stmt->execute([
      ":userID" => $userID,
      ":order_id" => $orderID
    ]);
  } catch (PDOException $e) {
    error_log("Error inserting items:  " . var_export($e, true));
  }
  redirect("view_order.php?id=$orderID");
}

$db = getDB();
foreach ($results as $index => $result) {
$stmt = $db->prepare("UPDATE products set stock = stock - (SELECT desired_quantity FROM cart where user_id = :uid AND product_id = products.id) WHERE products.id in (SELECT product_id from cart where user_id = :uid)");
$r = $stmt->execute([
  ":uid" =>$userID,

]);  }
?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST">

        <div class="row">
          <div class="col-50">
            <h3>Billing Information</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John">
            <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Smith">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" minlength="2" maxlength="2">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" minlength="5" maxlength="5">
              </div>
            </div>
          </div>


          <div class="col-50">
            <h3>Payment</h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

            <label for="ccnum">Payment Type</label>
            <input type="text" id="ccnum" name="paymenttype" placeholder="cash,credit,debit">
          </div>
          </div>
            <label for="pnum">Payment Amount</label>
            <input type="text" id="pnum" name="moneyreceived" placeholder="$$$">
          </div>

          <input type="submit" name="save" value="Continue to checkout" class="btn btn-outline-primary">
        </div>
    </div>
  </div>
  <div class="col-25">
    <div class="container" style="text-align: center;">
      <h4>Pending Items <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>

      <?php if (count($results) > 0) : ?>
        <?php foreach ($results as $r) : ?>
          <?php $subtotal += ($r["unit_cost"] * $r["desired_quantity"]); ?>


          <div class="card" style="width: 18rem; margin: 0 auto;">
            <div class="card-body">

              <p>Name:</a> <span class="price"> <?php echo ($r["name"]); ?> </span></p>
              <p>Price: <span class="price"><?php echo ($r["unit_cost"]); ?></span>$</p>
              <p>Desired Quantity: <span class="price"><?php echo ($r["desired_quantity"]); ?></span></p>
              
              <hr>
            </div>         
          </div>    
        <?php endforeach; ?>
        <a type="button" href="cart.php">Cart</a>
        <h2>Subtotal = <span class="price" style="color:black"><b><?php echo ($subtotal); ?></b></span></h2>
        
        <?php endif; ?>
      <input type="hidden" name="subtotal" value="<?php echo ($subtotal); ?>" />
       
      
    </div>
  </div>
  </form>
</div>



<?php
require(__DIR__ . "/../../partials/flash.php");
?>