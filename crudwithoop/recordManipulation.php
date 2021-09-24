<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new record</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- bootstrap css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./scriptforrecordManipulation.js"></script>
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class=" text-light m-auto">
     <p class="text-center">CRUD APPLICATION MAIN PAGE</p> 
  </div>

</nav>
<div class="container mt-5 w-50">
<form id="manipulationform">
  <div class="form-group">
    <label for="user_personalid">Person ID</label>
    <input type="number" class="form-control" id="user_personalid" placeholder="Write ID to Fetch or Add Record">
    
  </div>
  <div class="form-group">
    <label for="user_fullname">Full Name</label>
    <input type="text" class="form-control" id="user_fullname" >
  </div>
  <div class="form-group">
    <label for="user_address">Address</label>
    <input type="text" class="form-control" id="user_address" >
  </div>
  <div class="form-group">
    <label for="user_city">City</label>
    <input type="text" class="form-control" id="user_city" >
  </div>
  <div class="form-group">
    <label for="user_phonenumber">Phone Number</label>
    <input type="number" class="form-control" id="user_phonenumber" >
  </div>
 
  <button  class="btn btn-dark w-25" id="fetchbtn">Fetch</button>
  <button type="submit" class="btn btn-primary " id="addbtn">Add</button>
  <button type="submit" class="btn btn-danger" id="deletebtn">Detete</button>
  <button type="submit" class="btn btn-success" id="updatebtn">Update</button>
</form>
</div>



<script>
  var address = "street no 1";
  $()
</script>


<!-- bootstrap js files -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!-- bootstrap js files -->
</body>
</html>