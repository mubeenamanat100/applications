<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Update and Create</title>
</head>
<body>
<?php 

  if(isset($_GET['recid'])){
      $recordid = $_GET['recid'];
  }   
  echo $recordid;
 
?>

<h3 class="text-center bg-dark text-white p-3">Add And Update</h3>
<div class="container">

    <div class="row mt-5">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
        <form id="add_data_form">
            <div class="form-group">
                <label for="user_name">Name</label>
                <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Write Your Full Name</small>
            </div>
            <div class="form-group">
                <label for="user_age">Age</label>
                <input type="number" class="form-control" id="user_age">
            </div>
            <div class="form-group">
                <label for="user_contact">Contact Number</label>
                <input type="number" class="form-control" id="user_contact">
            </div>
            <div class="form-group">
                <label for="user_markofidf">Mark of Identification <small>(Optional)</small> </label>
                <input type="text" class="form-control" id="user_markofidf" placeholder="NIL">
            </div>
            
            <button type="submit" class="btn btn-dark">Add Now</button>
        </form>
            
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
        <form id="update_form">
        <h3 class="text-center bg-success text-white p-3">Update Box</h3>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control border-dark" id="user_id" aria-describedby="emailHelp" value="<?php echo $recordid ?>" required>
                <small  class="form-text text-success" id="Search_with_User_id">Search with User id</small>
            </div>
            <hr class="bg-dark">
            <div class="form-group">
                <label for="user_name">Name</label>
                <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp">
               
            </div>
            <div class="form-group">
                <label for="user_age">Age</label>
                <input type="" class="form-control" id="user_age">
            </div>
            <div class="form-group">
                <label for="user_contact">Contact Number</label>
                <input type="number" class="form-control" id="user_contact">
            </div>
            <div class="form-group">
                <label for="user_markofidf">Mark of Identification <small>(Optional)</small> </label>
                <input type="text" class="form-control" id="user_markofidf" placeholder="NIL">
            </div>
            
            <button  class="btn btn-success" type="submit"  id="fetch_data_btn">Fetch</button>
            <button class="btn btn-danger" type="submit"  id="update_data_btn">Update Details</button>
            
        </form>
            
        <script>

            // add data form code
            $(function () {
                $("#add_data_form").submit(function () {
                    
                    var form = $(this);
                    var name = form.find("input[id='user_name']").val();
                    var age = form.find("input[id='user_age']").val();   
                    var contactnumber = form.find("input[id='user_contact']").val();
                    var moidf= form.find("input[id='user_markofidf']").val();

                    // console.log(form + " " + name + " "+ age + " "+ contactnumber + " "+ moidf); 

                    if(submitDataToServer(name,age,contactnumber,moidf) ==200){
                        // form.reset();
                    }
                })


                function submitDataToServer(name,age,contactnumber,moidf) {
                    
                    $.ajax({
                        url: "CreateController.php",
                        type: "POST",
                        data: {
                            name: name,
                            age: age,
                            contactnumber: contactnumber,
                            moidf: moidf,
                            // mode:"createdata"
                        },
                        success: function (data) {
                            if(data==200){
                                return 200;
                            }
                            
                        }
                    

                    })
                }
            })

            //fetch btn
        $(function(){

            
            $("#fetch_data_btn").click(function(e){
                alert("fetch working fine");
                e.preventDefault();
                var form = $("#update_form");

                if(form.find("input[id='user_id']").val()==""){
                    form.find("input[id='user_id']").css('border','1px solid red');
                    document.getElementById("Search_with_User_id").innerHTML = "Please input user id";
                    $("#Search_with_User_id").addClass("text-success text-danger");
                    

                }else{
                    

                    var userid = form.find("input[id='user_id']").val();
                    

                    $.ajax({
                        url:"fetchController.php",
                        type:"POST",
                        data: {
                            userid: userid,
                            
                        },
                        success: function(data){
                            var obj = JSON.parse(data);
                            console.log(obj);
                            if((jQuery.isEmptyObject(obj))){
                                alert("running");
                                document.getElementById("Search_with_User_id").innerHTML = "Nothing Found";
                                $("#Search_with_User_id").addClass("text-success text-danger");
                            }else{
                                
                        
                                form.find("input[id='user_name']").val(obj.username);
                                form.find("input[id='user_age']").val(obj.age);   
                                form.find("input[id='user_contact']").val(obj.phonenumber);
                                form.find("input[id='user_markofidf']").val(obj.moidef);
                            }
                        

                        }
                    })
                }   

                   
                // })
            })
        })
            //modify btn
           
        $(function(){

        
                $("#update_data_btn").click(function (e) {
                    // $("#update_form").submit(function (e) {
                        e.preventDefault();
                        alert("modfy btn is called");
                        
                       

                    var form = $("#update_form");
                    // form.find("input[id='user_id']").reset();

                    var userid = form.find("input[id='user_id']").val();
                    var name = form.find("input[id='user_name']").val();
                    var age = form.find("input[id='user_age']").val();   
                    var contactnumber = form.find("input[id='user_contact']").val();
                    var moidef= form.find("input[id='user_markofidf']").val();
                    
                    alert("function ok");

                    console.log(name + age + contactnumber + moidef);
                    
                    
                    $.ajax({
                        url:"modify-Controller.php",
                        type:"POST",
                        data: {
                            userid: userid,
                            username: name,
                            age: age,
                            usercontact: contactnumber,
                            moidef: moidef
                            
                            
                        },
                        success: function(data){

                            console.log(data);
                        

                        }
                    })
                    
                    // })
                })
            })    

            
            

        </script>
            
       
        </div>
        </div>
    </div>
    </div>

</div>



 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>