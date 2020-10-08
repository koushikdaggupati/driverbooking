
    function log(){
      const login='<br> \
      <form action="login.php" method="POST">\
      <div class="form-group"> \
        <label for="exampleInputEmail1">Email address</label >\
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"> \
        <small id="emailHelp" class="form-text text-muted">We ll never share your email with anyone else.</small> \
      </div> \
      <div class="form-group"> \
        <label for="exampleInputPassword1">Password</label> \
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"> \
      </div> \
      <div class="form-check"> \
      </div> \
      <button type="submit"  class="btn btn-primary">login</button> \
       </form> ' ;
      document.getElementById("form").innerHTML=login;
    }
    function sign(){
      const signup='<form action="signup.php" method="POST" >\
      <div class="form-group">\
       <label for="exampleInputEmail1">First name</label>\
       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" name="first_name" required>\
       <label for="exampleInputEmail1">Last name</label>\
       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" name="last_name"required>\
       <label for="exampleInputEmail1">Email address</label>\
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>\
       <label for="exampleInputPassword1">Set Password</label>\
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Set Password" name="password" required>\
       <label for="exampleInputPassword1">Set Password</label>\
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" required>\
       <div class=" col form-check">\
       <input style="position: static;" type="checkbox" class="form-check-input" id="exampleCheck1">\
       <label class="form-check-label" for="exampleCheck1">I agree to terms and conditions</label>\
       </div>\
     <button type="submit" class="btn btn-primary">Sign up</button>\
     </form>';
     document.getElementById("form").innerHTML=signup;
    }
   function price(){
     var days=document.getElementById("days").value;
     var distance=document.getElementById("distance").value;
     var amount=days*1200+distance*2;
    document.getElementById("amount").innerHTML="Extexted amount is :"+amount;
   }