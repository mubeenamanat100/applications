$(function(){


    $("#loginform").submit(function(e){
        e.preventDefault();

       var form = $(this);
       var urlfield = $("#loginform").attr('action');
       var email = form.find("input[type='email']").val();
       var password = form.find("input[type='password']").val();

      
        $.ajax(
        {   
            url: urlfield,
            type: "POST",
            data: {email: email, password: password},
            success : function(data){
                if(data=="wrongcredentials"){

                  form.find("input[type='email']").css('border', '1px solid red');
                  form.find("input[type='password']").css('border','1px solid red');
                  alert("Email or Password not found");

                }else if(data=="loginsuccessfull"){

                    window.location = ("mainpage.php");

                }
            }

        }
      )
    })
  
})