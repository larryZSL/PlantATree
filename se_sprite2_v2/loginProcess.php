<?php 
	$userID = isset($_POST['cus_id'])?$_POST['cus_id']:"";
    	$psw = isset($_POST['password'])?$_POST['password']:"";
    	$remember = isset($_POST['remember'])?$_POST['remember']:"";
		
    if(!empty($userID)&&!empty($psw)) {

		require_once('conn.php');
        
        $sql_select = "SELECT cus_id,cus_password, cus_tpq FROM customer WHERE cus_id = '$userID' AND cus_password = '$psw'";

        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);

 
        if($userID==$row['cus_id']&&$psw==$row['cus_password']) {

            if($remember=="on") {

                setcookie("testing", $userID, time()+7*24*3600);
            }

            session_start();

            $_SESSION['user']=$userID;
			
			$sqlTime = "SELECT order_date FROM treeorder WHERE cus_id = '$userID' order by order_date desc ";

			$checkTime = mysqli_query($conn,$sqlTime);

			$row2 = mysqli_fetch_array($checkTime);
			
			$date1=date_create(date("Y-m-d"));
			$date2=date_create($row2['order_date']);
			$diff=date_diff($date1,$date2);
			$diffTime=$diff->format("%a");
			
			//echo $diff->format("%a");
			//echo $diffTime;
			
			//no more than 12 months
			if($diffTime<366){
			$_SESSION['vip']= $row['cus_tpq'];
			}
			
			$sqlSpecial = "SELECT special FROM customer WHERE cus_id = '$userID'";

			$special = mysqli_query($conn,$sqlSpecial);

			$row3 = mysqli_fetch_array($special);
			
			//Wholesale customers such as other nurseries and certain landscaping companies get special prices 
			if($row3['special']=='yes'){
				$_SESSION['vip']=100;
			}
			
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = date('Y-m-d H:m:s');

            $info = sprintf("Login User:%s,IP Address:%s,Time:%s \n",$userID, $ip, $date);
            $sql_logs = "INSERT INTO Logs(cus_id,ip,date) VALUES('$userID','$ip','$date')";

            //Need to create a log folder!!!
            $f = fopen('./logs/'.date('Ymd').'.log','a+');

            fwrite($f,$info);
            fclose($f);

            header("Location:homepage.php");

            mysqli_close($conn);
        }else {
            header("Location:index.php?err=1");
        }
    }else {
        header("Location:index.php?err=2");
    }

?>
