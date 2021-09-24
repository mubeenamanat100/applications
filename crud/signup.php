<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand align-self-lg-center" href="#">Sign Up</a>

      </nav>
    <div class="d-flex justify-content-center border border-dark ">
      <form class="d-flex flex-column justify-content-center  mt-5 mb-5 border-dark" id="signupform" action="./signupController.php">

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control w-100" id="email" aria-describedby="emailHelp" placeholder="Enter email" required  >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control w-100" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="confirmpassword">Confirm Password</label>
          <input type="password" class="form-control w-100" id="confirmpassword" placeholder="Write Your Password Again" required>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="confirmation" required>
          <label class="form-check-label" for="confirmation" >By Checking You are abide by our all <a href="#">Terms and Conditions</a></label>
        </div>
        <div class="d-flex flex-row ">
          <button type="submit" class="btn btn-dark mt-4 w-25">Sign Up</button>
          <h6 class=" align-self-end ml-4 text-danger" id="#wrongEmailInfo">a</h6>
        </div>
       
      </form>
    </div>
     

      <script>

          

            

            function checkConfirmPassword(passcode, confirmpassword){
                
              if(passcode==confirmpassword){
                  return true;
              }
            }

            function sendDataforsignup(email,password){

                var urlfield = $("#signupform").attr('action');

                $.ajax({

                        url: urlfield,
                        type:"POST",
                        data: {email: email, passcode: password},
                        success: function(data){
                            if(data=="emailIsSame"){
                                $("#signupform").find("#wrongEmailInfo").text("Email already Exists");
                                $("#signupform").find("input[id='email']").css("border","1px solid red");
                            }                                
                        }
                      
                });
            }

            $("#signupform").submit(function(e){
                e.preventDefault();

            var form = $("#signupform");
            console.log(form.find("input[id='email']").val());
            var email = $("#signupform").find("input[id='email']").val();
            var passcode = $("#signupform").find("input[id='password']").val();
            var confirmpassword= $("#signupform").find("input[id='confirmpassword']").val();   

                if(checkConfirmPassword(passcode,confirmpassword)){
                        //console.log(passcode,confirmpassword);
                    sendDataforsignup(email,passcode);
                }
                else{
                    $("#wrongEmailInfo").val("Confirm Password is Wrong");

                }

            })

          
          
        
          
            

      </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>