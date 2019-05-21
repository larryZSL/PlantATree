<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PlantATree</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
  	<link rel="stylesheet" href="css/style.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>

<body>
	<div id="wrapper" class="wrapper">
	  <header class="header htmleaf-header">
			<h1>PlantATree <span> </span></h1>
		</header>
	  <main>
	   <div class="container">
<?php
session_start();
include ("conn.php");

	$userID=isset($_SESSION['user'])?$_SESSION['user']:"";

		if(!empty($userID)){

            echo "<h1>Hi $userID</h1>";    
?>            
			<h2>Delivery and pick-up options</h2>
			<p> Select delivery or pick-up</p>
			<input type="radio" name="deliveryType" value="1" > Delivery<br>
			<input type="radio" name="deliveryType" value="2" > Pick Up<br>
			<br><br>
			
			
			
			<h2>Billing information</h2>
			<p>Select a payment method</p>
			<input type="radio" name="payment" value="1" > Credit Card<br>
			<input type="radio" name="payment" value="2" > Internet Banking<br>
			<input type="radio" name="payment" value="3" > PayPal<br>
			<br><br>
			
			<a href="checkout.php">Continue</a>
			
<?php			
			}else {
            echo "<h1>Illegal Access!</h1>";
            }

?>
 </div>
	  </main>
	</div>

</body>
</html>