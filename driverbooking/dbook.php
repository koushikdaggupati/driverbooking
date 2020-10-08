<center>
    <br><br><br><br><br>
<form method="POST" action="fbook.php">
  <div >
  <div class="form-group row">
      <label for="disabledTextInput">Driver ID</label>
      <input type="text" readonly id="disabledTextInput" class="form-control" id="staticEmail2" placeholder="Disabled input" value="<?php echo $_REQUEST['did']?>" name="dmail">
    </div>
    <div class="row">
      <label>Enter Phone</label>
      <input type="phone" class="form-control" placeholder="Phone number" name="phone">
    </div>
    <div class="row">
      <label>Enter Date</label>
      <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="date">
    </div>
    <div class="row">
        <label>Enter time</label>
      <input type="time" class="form-control" placeholder="MM:HH" name="time">
    </div>
    <div class="row">
        <label>Enter Pickup point</label>
      <textarea type="textarea" class="form-control" placeholder="Enter pick point" name="adress"></textarea>
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Conform</button>
</form>
</center>
