<?php 
	$userID = isset($_POST['cus_id'])?$_POST['cus_id']:"";
    	$psw = isset($_POST['password'])?$_POST['password']:"";
    	$remember = isset($_POST['remember'])?$_POST['remember']:"";

    if(!empty($userID)&&!empty($psw)) {

		require_once('conn.php');
        
        $sql_select = "SELECT cus_id,cus_password FROM customer WHERE cus_id = '$userID' AND cus_password = '$psw'";

        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);

 
        if($userID==$row['cus_id']&&$psw==$row['cus_password']) {

            if($remember=="on") {

                setcookie("testing", $userID, time()+7*24*3600);
            }

            session_start();

            $_SESSION['user']=$userID;
 
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = date('Y-m-d H:m:s');

            $info = sprintf("Login User:%s,IP Address:%s,Time:%s \n",$userID, $ip, $date);
            $sql_logs = "INSERT INTO Logs(cus_id,ip,date) VALUES('$userID','$ip','$date')";

            //Need to create a log folder!!!
            $f = fopen('./logs/'.date('Ymd').'.log','a+');

            fwrite($f,$info);
            fclose($f);

            header("Location:shop.php");

            mysqli_close($conn);
        }else {
            header("Location:index.php?err=1");
        }
    }else {
        header("Location:index.php?err=2");
    }

?>
