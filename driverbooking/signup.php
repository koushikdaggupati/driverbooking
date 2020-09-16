<?php
$servername='localhost';
$username='id10238529_koushikdb';
$password='koushik';
$dbname = "id10238529_betinfo";
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    date_default_timezone_set("Asia/Calcutta");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO employee (name,year,amount,contact)
    VALUES ('$first_name', '$last_name','$city_name','$email')";
    echo "we wil contact you soon!!!";
    $conn->exec($sql);
    }
catch(PDOException $e)
    {

    	echo  "<br>" . $e->getMessage();
    }

$conn = null;
?>