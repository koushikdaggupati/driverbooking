<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DRIVER DEKHO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
          .col{
           position: static;  
          }
          .div1{
              background-image:url(beautiful.jpg);
              background-size:100vw 100vh;
              background-repeat: no-repeat;
          }
          .div2{
              background-image:url(car.jpg);
              background-size:100vw 100vh;
              background-repeat: no-repeat; 
              }
              .div3{
              background-image:url(price.jpg);
              background-size:100vw 100vh;
              background-repeat: no-repeat;
          }
            .mycontainer{
              height: 100vh;
            }
          .mynav{
            top:0;
            width: 100%;
            position:fixed;
          }
          .bstyle{
            border-left: 5px solid green;
          }
          .myborder{
            background-color:rgb(71, 69, 71);
            opacity: 0.6;
            border-radius: 10px;
          }
            @media screen and (min-width: 992px) {
            .myalign{
              padding-top: 23vh;
            }
          }
          .myborder{

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
                  <a class="nav-link" href="priceing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jointeam">Join our Team</a>
                  </li>
              </ul>
              <ul class="navbar-nav">
              <li class="nav-item mr-2">
              </li>
              <li>
              </li>
              </ul>
            </div>
          </nav>
          </div>
          <div style="height:100vh" class="container mycontainer">
          <center>
                <div style="padding-top: 30vh;padding-bottom: 30vh;"class="row justify-content-center">
        <div style="border-radius:5px;" class="col-lg-4 col-sm-7 bg-primary">
        <h3 class="text-danger">OTP sent to mail!</h3>
          <form action="fotpverification.php" method="POST" >
            <div class="form-group mb-2"> 
            <input type="text" readonly class="form-control form-control-plaintext" id="staticEmail2" value="<?php echo  $_GET['email']?>" name="email">     
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">OTP</label>
              <input type="password" class="form-control" id="inputPassword2" placeholder="Enter OTP" name="otp">
            </div>
            <div class="text-danger"><?php echo $_GET['status']?></div>
            <a class="text-light" href="resendotp.php">resend OTP?</a>
            <br>
            <button type="submit" class="btn btn-danger mb-2">Verify</button>
          </form>
          </div>
          </div>
        </center>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </body>
