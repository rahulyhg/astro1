<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="container">
<?php include "header.php" ?>

  <h2>Give your details</h2>
  <form role="form">
    <div>
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="add">Address:</label>
      <input type="address" class="form-control" id="add" placeholder="Address..">
    </div>
   <div class="form-group">
   <label for="btime">Btime:</label>
   <input type="btime" class="form-control" id="btime" placeholder="btime">
   </div>
    <div class="form-group">
    <label for="dob">DOB:</label>
    <input type="dob" class="form-control" id="dob" placeholder="DOB..">
    </div>
    <div class="form-group">
    <label for="bplace">Bplace:</label>
    <input type="bplace" class="form-control" id="bplace" placeholder="bplace">
    </div>
    <div class="form-group">
      <label for="mobno">Mobile No:</label>
      <input type="mobno" class="form-control" id="mobno" placeholder="mobile No">
      </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Email Id">  
    </div>
 <div class="checkbox">
      <label><input type="checkbox"> Male</label>
      <label><input type="checkbox">Female</label>
    </div>

    <button type="submit">Submit</button>
  </form>
</div>
</body> 
</html>
