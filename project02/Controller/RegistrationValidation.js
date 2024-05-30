
function Validation() {
    var fname = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var userName = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cpassword").value;

    if(fname=="")
    {
      document.getElementById("errorname").innerHTML="Name Required !!";
    }
    else
    {
      document.getElementById("errorname").innerHTML="";
    }

  
    if(phone=="")
    {
      document.getElementById("errorphone").innerHTML="Phone Required !!";
    }
    else
    {
      document.getElementById("errorphone").innerHTML=""; 
    }

    if(userName=="")
    {
      document.getElementById("errorusername").innerHTML="Username Required !!";
    }
    else
    {
      document.getElementById("errorusername").innerHTML="";
    }

    if (password.length<5 ) 
    {
     document.getElementById("errorpass").innerHTML="Password Must Contain 5 Char";
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }

    if (confirmPassword.length<5 ) 
    {
     document.getElementById("errorCpass").innerHTML="Password Must contain 5 Char";
    return false;
    }
    else 
    {
      document.getElementById("errorCpass").innerHTML="";
    }



    if(password!=confirmPassword){
      document.getElementById("errorCpass").innerHTML="Password and Confirm Password Doesn't Match";
      return false;
    }
    else 
    {
      document.getElementById("errorCpass").innerHTML="";
    } 
  }
  