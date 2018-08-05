function uservalidate() {
          var name = document.userform.username;
	        var phone = document.userform.ph; 
          var password = document.userform.password;
	        var conpass = document.userform.password_confirm;
	        var email = document.userform.email;
	        var a = document.userform.address;
	                    if (name=="") {
                              alert("Please enter your name.");
                             name.focus();
                             return false;
                          }
                      re = /^\w+$/;
                      if(!re.test(userform.username.value)) {
                              alert("Error: Username must contain only letters, numbers");
                              userform.username.focus();
                              return false;
	                        }
                      var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
                      if(phone.value.match(phoneno)) {
                               return true;
                          }
                      else {
                               alert("phoneno is invalid");
                               return false;
                           }
                      if((password!="") && (password==conpass)) {
                                if(password.length < 4) {
                                    alert("Error: Password must contain at least four characters!");
                                    password.focus();
                                    return false;
                                 }
                                if(password==name) {
                                    alert("Error: Password must be different from Username!");
                                    password.focus(); 
                                    return false;
                                 }
                      re = /[0-9]/;
                      if(!re.test(password)) {
                                alert("Error: password must contain at least one number (0-9)!");
                                password.focus();
                                return false;
                           }
                      re = /[a-z]/;
                                 if(!re.test(password)) {
                                         alert("Error: password must contain at least one lowercase letter (a-z)!");
                                         password.focus();
                                         return false;
                                  }
                      re = /[A-Z]/;
                                  if(!re.test(password)) {
                                         alert("Error: password must contain at least one uppercase letter (A-Z)!");
                                         password.focus();
                                         return false;
                                  }
                      } 
	                    else {
                                  alert("Error: Please check that you've entered and confirmed your password!");
                                  password.focus();
                                  return false;
                           }
                                  alert("You entered a valid password: " + password);
                                  return true;
                      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                   if (!filter.test(email)) {
                                          alert('Please provide a valid email address');
                                          email.focus();
                                          return false;
	                                  }
	                    if(a=="") {
                              alert("please Enter the details");
                              document.userform.address.focus();
                              return false;
                      }
                      if((a.length < 30) || (a.length > 100)) {
                              alert(" You must be 30 to 100 characters");
                              document.userform.address.select();
                              return false;
                      }
}


function redirecttodriversignup()
{
  location.href="E:/Final/driversignup.html"
}


function redirecttocustomersignup()
{
  location.href="E:/Final/customersignup.html"
}