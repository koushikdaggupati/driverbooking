<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'driver';
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $location = $_POST['city'];
      // the message
      $otp=rand(10000,19999).'</h1></body></html>';
        $msg ='<html><body><b>Thankyou</b><br>You are few steps to get started <br><h1> your code is : '.$otp .'</h1></html>';
     // use wordwrap() if lines are longer than 70 characters
     // To send HTML mail, the Content-type header must be set
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     if(mail($email,"OTP VERIFICATION",$msg, $headers))
    date_default_timezone_set("Asia/Calcutta");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",'root','');
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO log (firstname,lastname,email,password,otp,phone,location)
    VALUES ('$first_name', '$last_name','$email','$password','$otp',$phone,$location)";
    echo "we wil contact you soon!!!";
    $conn->exec($sql);
    }
     catch(PDOException $e)
    {

    	echo  "<br>" . $e->getMessage();
    }
    header('Location:http://localhost/driverbooking/driverotpverification.php?email='.$email.'&status='.'');
  // the message
    ?>