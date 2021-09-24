
form = $("#manipulationform");
//fetch
function fetchbtn(){
$(function(){
    
    $("#fetchbtn").click(function(e){
        e.preventDefault();
        var pid = getpersonid();
        $.ajax({
            url:"./fetch.php",
            type:"POST",
            data:{personid: getpersonid()},
            success: function(data){
                var dataobj = JSON.parse(data);

                setFullName(dataobj.fullname);
                setAddress(dataobj.address);
                setCity(dataobj.city);
                setPhoneNumber(dataobj.phonenumber);
            }
        })
        
    })


})

}

fetchbtn();

//ADd record
$(function(){
    $("#addbtn").click(function(e){
        e.preventDefault();
        $.ajax({
            url:"addperson.php",
            type: "POST",
            data:{
                personid: getpersonid(),
                fullname: getFullName(),
                address: getAddress(),
                city: getCity(),
                phonenumber: getPhoneNumber()
            },

            success: function(data){
                console.log(data);
            }
        })
    })
})

//Delete record
$(function(){
    $("#deletebtn").click(function(e){
        e.preventDefault();
        if(getpersonid()==false){
            alert('please enter id to delete');
        }else{
            $.ajax({
                url:"deletedata.php",
                type:"POST",
                data: {personid: getpersonid()},
                success: function(data){
                    alert("record successfully deleted" + data);

                }
            })
        }
    })
})

//update record
$(function(){
    $("#updatebtn").click(function(e){
        e.preventDefault();

        // alert("called");
        if(getpersonid()==false){
            alert("please input person id and fetch record to update");
        }else{
            
            
                $.ajax({
                    url:"./updatedata.php",
                    type:"POST",
                    data:{
                        personid:getpersonid(),
                        fullname: getFullName(),
                        address: getAddress(),
                        city: getCity(),
                        phonenumber: getPhoneNumber()                    
                    
                    },
                    success: function(data){
                        alert(data);
                    }

                })
            

        }
    })
})

function getpersonid(){  
    var personid; 
  personid = $("#manipulationform").find("input[id='user_personalid']").val();
    return personid;
}

function setpersonid(id){
    $("#manipulationform").find("input[id='user_personalid']").val(id);
}

function getFullName(){
    var fname;
  return fname = $("#manipulationform").find("input[id='user_fullname']").val();
}

function setFullName(fullname){
    $("#manipulationform").find("input[id='user_fullname']").val(fullname);
}

function getAddress(){
    var address;
  return address = $("#manipulationform").find("input[id='user_address']").val();
}

function setAddress(address){
    $("#manipulationform").find("input[id='user_address']").val(address);
}

function getCity(){
    var city;
  return city = $("#manipulationform").find("input[id='user_city']").val();
}

function setCity(usercity){
    $("#manipulationform").find("input[id='user_city']").val(usercity);
}

function getPhoneNumber(){
    var pnumber;
  return pnumber = $("#manipulationform").find("input[id='user_phonenumber']").val();
}

function setPhoneNumber(PhoneNumber){
    $("#manipulationform").find("input[id='user_phonenumber']").val(PhoneNumber);
}