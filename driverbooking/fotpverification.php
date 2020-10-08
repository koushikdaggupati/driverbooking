<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'user';
$email = $_POST['email'];
$otp = $_POST['otp'];
$f=0;
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "SELECT * FROM log";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if( $_POST['email']==$row['email'] &&  $_POST['otp']==$row['otp']){
      echo "login sucess";
      $f=1;
      header('Location:http://localhost/driverbooking/dashboard.php?email='.$email);
       break;
    }
      else{
          echo "recheck your entery";
      }
     }
}
 else {
    echo "wrong entery";
}
$conn->close();
if($f==0){
    header('Location:http://localhost/driverbooking/otpverification.php?email='.$email.'&status='.'wrong otp re-enter otp');
}
    ?>