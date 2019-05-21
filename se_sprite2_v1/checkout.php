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
			<h1>PlantATree <span> </span></h1>
		</header>
	  <main>
	   <div class="container">
<?php
session_start();
include ("conn.php");

	$userID=isset($_SESSION['user'])?$_SESSION['user']:"";

		if(!empty($userID)){
            //echo "<h1>Welcome back!!</h1>";
            echo "<h1>Hi $userID</h1>";    
            }else {
            echo "<h1>Illegal Access!</h1>";
            }
        

$ann=array();
if(!empty($_SESSION["gwc"]))
{
    $ann=$_SESSION["gwc"];

}
$zhonglei = count($ann);

$aa=0;//total price
foreach($ann as $k)
{

    $k[0];//tree id
    $k[1];//tree quility
    $sql1="select tree_price from tree where tree_id='{$k[0]}'";

       $price=$conn->query($sql1);

    while($row = $price->fetch_assoc())
    {

        $aa=$aa + $row['tree_price']*$k[1];
    }


}
?>


<?php



    foreach($ann as $v)
    {
        $skc = "select tree_name,tree_stock from tree WHERE tree_id='{$v[0]}'";
        //tree id $v[0]
        $akc = $conn->query($skc);
		 while($row = $akc->fetch_assoc()){
			 $stock = $row['tree_stock'];
			 $tree_name = $row['tree_name'];
		 }
       
        //check stock
        if($stock<$v[1])
        {
            echo "<br><br>{$tree_name}  Not enough!";
            
            exit;
        }

    }


 
    foreach($ann as $v)
    {
        $skckc = "update tree set tree_stock = tree_stock-{$v[1]} WHERE tree_id='{$v[0]}'";
 
        $conn->query($skckc,0);
    }


    $ddh = date("YmdHis");

    foreach ($ann as $v)
    {
        $sddxq = "insert into treeorder (cus_id, tree_id, order_quility, order_date) VALUES ('$userID', '{$v[0]}','{$v[1]}','$ddh')";
        $conn->query($sddxq);
    }
	echo "<h1>Thanks for your ordering!</h1>";
	unset($_SESSION['gwc']);
	echo "<a href='shop.php'>Continue</a>";



 ?>
 </div>
	  </main>
	</div>

</body>
</html>