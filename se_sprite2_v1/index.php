<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<metacharset=UTF-8">
</head>
<body>
    <div class="content" align="center">
        <div class="header">
        <h1>Welcome to PlantATree</h1>
	<p>Please Login</p>
        </div>
        <!--??-->
        <div class="middle">
            <form id="loginform" action="loginProcess.php" method="post">
                <table border="0">
                    <tr>
                        <td>UserID:</td>
                        <td>
                            <input type="text" id="cus_id" name="cus_id" required="required"
                            value="<?php echo isset($_COOKIE["testing"])?$_COOKIE["testing"]:"";?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="remember"><small>Remember me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "The UserID or password is wrong!!";
                                    break;
                                    case 2:
                                    echo "The password cannot be empty!!";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="login" name="login" value="Login">
                            <input type="reset" id="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            Don't have an account yet? Hurry to <a href="register.php">Create</a>!!
                        </td>
                    </tr>
                </table>
            </form>
        </div>
      </div>
</body>
</html>