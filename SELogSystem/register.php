<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<div class="content" align="center">

		<div class="header">
		<h1>Sign Up Page</h1>
		</div>
	<div class="middle">
		<form action="registerProcess.php" method="post">
			<table boarder="0">
				<tr>
					<td>User ID:</td>
					<td><input type="text" id="cus_id" name="cus_id" required="required"></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" id="password" name="password" required="required"></td>
				</tr>

				<tr>
					<td>Comfirm Your Password:</td>
					<td><input type="password" id="repassword" name="repassword" required="required"></td>
				</tr>

				<tr>
					<td>First Name:</td>
					<td><input type="text" id="firstName" name="firstName" required="required"></td>
				</tr>

				<tr>
					<td>Last Name:</td>
					<td><input type="text" id="lastName" name="lastName" required="required"></td>
				</tr>

				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" id="gender" name="gender" value="Male">Male
						<input type="radio" id="gender" name="gender" value="Female">Female
					</td>
				</tr>

				<tr>
					<td>Email Address:</td>
					<td><input type="text" id="email" name="email" required="required"></td>
				</tr>

				<tr>
					<td>Contant Number:</td>
					<td><input type="text" id="phone" name="phone" required="required"></td>
				</tr>

				<tr>
					<td>Address:</td>
					<td><input type="text" id="address" name="address" required="required"></td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						<?php 
							$err=isset($_GET["err"])?$_GET["err"]:"";

							switch($err)
								{
									case 1:
									echo "The User Name is already used!";
									break;
									case 2:
									echo "Password and Comfirm-Password are not same!";
									break;
									case 3:
									echo "Register Successful!";
									break;
								}
						 ?>
					 </td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						<input type="submit" id="register" name="register" value="Register">
						<input type="reset" id="reset" name="reset" value="Reset">
					</td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						If you already have account, go to <a href="login.php">Login</a>!!
					</td>
				</tr>

			</table>
		</form>
	</div>
	</div>
	
</body>
</html>