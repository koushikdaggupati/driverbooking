<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
  .myalign{
               float:right;
               margin-right: 3vw;
        }
.mybg{
        background-color: gray;
        border-radius: 30px;
      }
.mynav{
      top:0;
      width: 100%;
       position:fixed;
      }
      .col{
           position: static;  
          }
</style>
</head>
<body>
<div class="mynav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand text-danger" href="index.html"><span><img style="width:150px" src="logo.png"></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html"><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#div3">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="driverregister.html">Join our Team</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav">
                  <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php echo $_GET['email'];?>
                    </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                       <a class="dropdown-item" href="index.html">Logout</a>
                      </div>
                    </div>
                  </ul>
                </div>
              </nav>
            </div>
<div class="div1 container" id="div1">
<br><br><br><br>
<div class="bg-sucess">

</div>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'driver';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM booking where email='.'\''.$_GET['email'].'\'';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="bg-primary">';
        echo "<p>customer Number:".$row['phone']."</p>";
        echo "<p>date:".$row['date']."</p>";
        echo "<p>Time:".$row['time']."</p>";
        echo "<p>pick point:".$row['adress']."</p>";
        echo "</div>";
}
} else {
    echo "No bookings till now";
}
$conn->close();
?>
</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
