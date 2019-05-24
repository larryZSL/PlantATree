<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PlantATree</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
  	<link rel="stylesheet" href="css/style.min.css">
</head>
<body>
	<div id="wrapper" class="wrapper">
	  <header class="header htmleaf-header">
			<h1>View Cart <span> </span></h1>
		</header>
	  <main>
	   <div class="container">
	
	<table border="1" cellpadding="0" cellspacing="0" width="100%" >
    <tr>
        <td>Tree Name</td>
		<td>Tree Stock</td>
        <td></td>
    </tr>
<?php

	require_once('conn.php');
	$search = $_POST['search'];

        $sql="SELECT tree_id, tree_name, tree_stock FROM tree WHERE tree_name = '$search'";
   
        $result = mysqli_query($conn,$sql);
        

        while($row = $result->fetch_assoc()){
    
        echo " <tr>
        <td>".$row['tree_name']."</td>
		<td>".$row['tree_stock']."</td>
        <td>
        <a href='fruitCart.php?id={$row["tree_id"]}'>Add to Cart</a>
        
</td>
    </tr>";
    }


        mysqli_close($conn);
?>
<br>
	   
		<a href="viewCart.php">View Cart</a><br>
		<a href="homepage.php">Back</a>
	   </div>
	  </main>
	</div>


</body>
</html>