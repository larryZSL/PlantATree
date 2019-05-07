<?php

    $userID = isset($_POST['cus_id'])?$_POST['cus_id']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $re_password = isset($_POST['repassword'])?$_POST['repassword']:"";
    $fname = isset($_POST['firstName'])?$_POST['firstName']:"";
    $lname = isset($_POST['lastName'])?$_POST['lastName']:"";
    $gender = isset($_POST['gender'])?$_POST['gender']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $phone = isset($_POST['phone'])?$_POST['phone']:"";
    $address = isset($_POST['address'])?$_POST['address']:"";

    /*$userID = $_POST["cus_id"];
    $password = $_POST["password"];
    $re_password = $_POST["repassword"];
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];*/



    if($password == $re_password) {

        /*require_once('./setting.php');*/

        $host = "cmslamp14.aut.ac.nz";
        $user = "rsm3009";
        $pswd = "158420hbb";
        $dbnm = "rsm3009";

        $conn = mysqli_connect($host,$user,$pswd,$dbnm);

        $sql_select="SELECT cus_id FROM customers WHERE cus_id = '$userID'";
   
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);

        if($userID == $row['cus_id']) 
        {
            header("Location:register.php?err=1");
        } 
        else {
            $sql_insert = "INSERT INTO customers(cus_id,cus_password,cus_fname,cus_lname,cus_gender,cus_email,cus_phone,cus_address) VALUES('$userID','$password','$fname','$lname','$gender','$email','$phone','$address')";

            mysqli_query($conn,$sql_insert);
            header("Location:register.php?err=3");
        }

        mysqli_close($conn);
    } else {
        header("Location:register.php?err=2");
    }

?>
