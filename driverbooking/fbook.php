<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'driver';
try { 
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['dmail'];
    $adress= $_POST['adress'];
    $phone=$_POST['phone'];
      // the message
        $msg ='<html><body><b>Congras!</b>you have booking:<br>Time:'.$time.'<br>date:'.$date.'<br>adress:'.$adress.'</html>';
     // use wordwrap() if lines are longer than 70 characters
     // To send HTML mail, the Content-type header must be set
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     if(mail($email,"Got booking",$msg, $headers))
    date_default_timezone_set("Asia/Calcutta");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",'root','');
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO booking (email,date,time,adress,phone)
    VALUES ('$email', '$date','$time','$adress','$phone')";
    echo "<center>";
    echo "booking sucessfull!!!<br>";
    echo "please contact driver before your journey";
    echo '<a href="http://localhost/driverbooking/dashboard.php?email='.$email.'"><br>done</a>';
    echo "</center>";
    $conn->exec($sql);
    }
catch(PDOException $e){

    echo  "<br>" . $e->getMessage();
}
?>