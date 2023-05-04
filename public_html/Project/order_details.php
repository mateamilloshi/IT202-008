<?php
require(__DIR__ . "/../../partials/nav.php"); ?>

<?php
if (!is_logged_in()) {
    flash("You must be logged in to access this page");
    die(header("Location: login.php"));
}

?>
<?php

    $orderID = se($_GET, "id", -1, false);
    $userID = get_user_id();
    $subtotal = 0;

$results = [];
   
    $db = getDB();
    $stmt = $db->prepare("SELECT OrderItems.id, order_id, product_id, OrderItems.unit_price, OrderItems.quantity, products.name From OrderItems JOIN products ON products.id = OrderItems.product_id Where order_id=:orderID LIMIT  10");
    $r = $stmt->execute([":orderID"=> $orderID]);
    if ($r) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        flash("There was a problem fetching the results " . var_export($stmt->errorInfo(), true));
    }

 
    

?>

<h3 style="text-align: center; margin-top: 20px ;">Order Details</h3>
<div class="results" style="margin-left: 50px;">
    <?php if (count($results) > 0): ?>
            <?php foreach ($results as $r): ?>
                <?php $subtotal += ($r["unit_price"] * $r["quantity"]); ?>

                <div class="card" style="width: 25rem; height: 25rem;">
                <div class="card-body">
                <h5 class="card-title">Item: <?php echo($r["name"]); ?></h5>
                <div>Price: <?php echo($r["unit_price"]); ?></div>
                <div>Quantity: <?php echo($r["quantity"]); ?></div>
                
                </div>
            <?php endforeach; ?>

                </div>
                <h2>Subtotal = <span class="price" style="color:black"><b><?php echo ($subtotal); ?></b></span></h2>
         </div>

   
    <?php endif; ?>
    <?php
$orderID = se($_GET, "id", -1, false);
$result = [];

$db = getDB();
$stmt = $db->prepare("SELECT id, user_id, total_price, first_name, last_name, address, payment_method, money_received FROM orders WHERE id = :orderID");
$res = $stmt->execute([":orderID" => $orderID]);

    if ($res) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        flash("There was a problem fetching the results " . var_export($stmt->errorInfo(), true));
    }
?>





<div class="results" style="margin-left: 50px;">
    <?php if (!empty($result)): ?>
        <h5 style="text-align:left ; margin-left: 10px ;">Shipping Information</h5>
                <div class="card" style="width: 15rem; height: 15rem;">
                <div class="card-body">
            <div><b>First Name: </b><?php echo($result["first_name"]); ?></div>
            <div><b>Last Name: </b><?php echo($result["last_name"]); ?></div>
            <div><b>Address: </b><?php echo($result["address"]); ?></div>
            <div><b>Payment Method: </b><?php echo($result["payment_method"]); ?></div>
            <div><b>Payment Amount: </b><?php echo($result["money_received"]); ?></div>
        </div>
    <?php endif; ?>
    
    </div>
    </div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>