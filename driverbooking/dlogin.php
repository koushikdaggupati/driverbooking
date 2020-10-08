<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'user';
$f=0;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "SELECT * FROM dlog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if( $_POST['email']==$row['email'] &&  $_POST['password']==$row['password']){
        header('Location:https://curriesbet.000webhostapp.com/ddashboard.php');
        $f=1;
        break;
         }
      else{
          
      }
     }
}
 else {
    echo "wrong entery";
}
$conn->close();
if($f==0)
{
    header('Location:http://localhost/driverbooking/');
}
?>