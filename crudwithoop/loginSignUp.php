<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SignUp</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- bootstrap css -->
</head>
<body>
    
<!-- loginform -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Login / SignUp</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" id="user_login_form">
        <input class="form-control mr-sm-2" type="email" placeholder="User Email" id="user_email" aria-label="Email">
        <input class="form-control mr-sm-2" type="password" placeholder="User Password" id="user_password" aria-label="Password">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>

<!-- Sign Up form -->
<div class=" w-25 ml-auto mr-5 mt-5 border border-dark p-3">

<form class="" id="sign_up_form">
  <div class="form-group">
  <div class="alert alert-primary text-center" role="alert">
  Don't have Account Register Here!
    </div>
    <label for="user_email">Email address</label>
    <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" class="form-control" id="user_password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">You are hereby confirming all the <a href="#">Terms and Conditions </a></label>
  </div>
  <button type="submit" class="btn btn-success w-25">Sign Up</button>
</form>

</div>






<!-- bootstrap js files -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!-- bootstrap js files -->
</body>
</html>