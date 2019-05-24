<?php
session_start();
?>
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
			<h1><a href="homepage.php">PlantATree</a> <span> </span></h1>
		</header>
	  <main>
	   <div class="container">
	<?php
		$userID=isset($_SESSION['user'])?$_SESSION['user']:"";

		if(!empty($userID)){
        ?>
        <?php
            echo $userID; 
						
        ?>
            <br/>
            <a href="logout.php">Sign Out</a>
        <?php
		include ("conn.php");
		$sql = "select cus_address from customer WHERE cus_id = '$userID'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
?>
	<form action="beforecheckout.php" method="post">
		<p>Select delivery or pick-up</p>
		<input type="radio" name="deliveryType" value="5" >Working days: $5<br> 
		<p>Input your delivery address:</p>
		<input type="text" name="d_address" required="required" value = "<?php echo $row['cus_address'] ?>"><br>
		<input type="radio" name="deliveryType" value="10" >Weekend: $10<br>
		<input type="radio" name="deliveryType" value="0" checked>Pick Up: $0<br><br>
		<input type="submit" name="next" value="Next Step">
	</form>
<?php
            }else {

        ?>
            <h1>Illegal Access!</h1>
        <?php   
            }
        ?> 
		
				
	   </div>
	  </main>
	</div>


</body>
</html>