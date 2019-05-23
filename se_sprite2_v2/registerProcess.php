<?php

    $userID = isset($_POST['cus_id'])?$_POST['cus_id']:"";
    $psw = isset($_POST['password'])?$_POST['password']:"";
    $re_password = isset($_POST['repassword'])?$_POST['repassword']:"";
    $fname = isset($_POST['firstName'])?$_POST['firstName']:"";
    $lname = isset($_POST['lastName'])?$_POST['lastName']:"";
    $gender = isset($_POST['gender'])?$_POST['gender']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $phone = isset($_POST['phone'])?$_POST['phone']:"";
    $address = isset($_POST['address'])?$_POST['address']:"";
	$special = no;

    /*$userID = $_POST["cus_id"];
    $password = $_POST["password"];
    $re_password = $_POST["repassword"];
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];*/



    if($psw == $re_password) {

        require_once('conn.php');

        $sql_select="SELECT cus_id FROM customer WHERE cus_id = '$userID'";
   
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);

        if($userID == $row['cus_id']) 
        {
            header("Location:register.php?err=1");
        } 
        else {
            $sql_insert = "INSERT INTO customer (cus_id,cus_password,cus_fname,cus_lname,cus_gender,cus_email,cus_phone,cus_address, special) VALUES('$userID','$psw','$fname','$lname','$gender','$email','$phone','$address', '$special')";

            mysqli_query($conn,$sql_insert);
            header("Location:register.php?err=3");
        }

        mysqli_close($conn);
    } else {
        header("Location:register.php?err=2");
    }

?>
