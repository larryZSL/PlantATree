<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Successful!</title>
</head>
<body>
	<div>
		<?php 
			session_start();

			$userID=isset($_SESSION['user'])?$_SESSION['user']:"";

		if(!empty($userID)){
        ?>
            <h1>Welcome back!!</h1>
        <?php
            echo $userID;    
        ?>
            <br/>
            <a href="logout.php">Sign Out</a>
        <?php

            }else {

        ?>
            <h1>Illegal Access!</h1>
        <?php   
            }
        ?> 
	</div>
</body>
</html>