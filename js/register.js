var signup = document.querySelector("#register");
signup.addEventListener("click", function(event){
  event.preventDefault();
  alert("Please Provide all  ")
              let firstname= document.getElementById('firstname') 
              let lastnmae= document.getElementById('lastname') 
              var email= document.getElementById('email') 
              
             var contactnumber= document.getElementById('contactnumber')   
              var password= document.getElementById('password') 
			var retypepassword =document.getElementById('retypepassword')
				   

                var formData = new FormData($('#myform')[0])
                

                if (firstname !=''&& lastnmae != '' && email !=''&& contactnumber  != ''&& password != '' && retypepassword!='')
                {
                  $.ajax({
                  type: 'post',
                  url: './php/register.php',
                  data: formData,
                  contentType:false,
                  processData:false,
                  success:function(response){
                    console.log(response);
                  }
                         })     
     }

          else{
            alert("Please Provide all Information ")
          };
        
        });