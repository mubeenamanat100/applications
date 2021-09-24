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
    <h3 class="text-center bg-dark text-white p-3">CRUD Application</h3>

    <button class="btn btn-dark mb-2 ml-1" id="showAllData">show all data</button>
    <button class="btn btn-dark mb-2 ml-1" id="addData">Add Data</button>
  
    <table class="table text-center" action="./mainpagedata.php">
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Mark of idenfication</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody id="fetchedData">
    <!-- <tr id="tabledata">
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td class="d-flex justify-content-center ">
          <button class="btn btn-sucess mr-1 ml-1">Save</button>
          <button class="btn btn-danger mr-1 ml-1">Delete</button>
      </td>
    </tr>
    <tr id="tabledata">
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td class="d-flex justify-content-center ">
          <button class="btn btn-sucess mr-1 ml-1">Save</button>
          <button class="btn btn-danger mr-1 ml-1">Delete</button>
      </td>
    </tr> -->
  
  </tbody>
</table>

    <script>

        function loadtable() {
              $.ajax({
                url: "mainpagedata.php",
                type:"post",
                success: function(data){
                    
                    $("#fetchedData").html(data);

                }
            })
        }
      
        $("#showAllData").click(function(){
            // table = $(this);
            
           loadtable();
        })

       
          $("#addData").on('click',function(){
            window.open("./updateAndCreate.php");
           })
      
      
           $(document).on('click','.update-btn',function(){
             var recId = $(this).data('id');
            //  console.log("${recId}");
              window.open(`./updateAndCreate.php?recid=${recId}`);
           })
       
        $(document).on('click','.delete-btn',function(){
            alert("Are you sure you want to delete");
            var recId = $(this).data('id');
            $.ajax({
              url:"delete-data.php",
              type:"POST",
              data: {deleteId: recId},
              success: function(data) {
                alert("success");
                loadtable();
              }
            })
        })
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>