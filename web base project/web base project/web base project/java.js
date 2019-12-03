
function ValidateFullName() 
{
    var val = document.getElementById('fullname').value;
    
    if (!val.match(/^[a-zA-Z]+$/)) 
    {
        alert('Please Enter a Valid Full Name');
        return false;
    }
    
    return true;
}

function ValidateUsername() 
{
    var val = document.getElementById('username').value;
    
    if (!val.match(/^[a-zA-Z]+$/)) 
    {
        alert('Please Enter a Valid Username');
        return false;
    }
    
    return true;
}

function ValidateMatricNo() 
{
    var val = document.getElementById('matric').value;
    
    if (!val.match(/^[0-9](?=.{4})/)) 
    {
        alert('Please Enter a Valid Matric Number (xxxxx)');
        return false;
    }
    
    return true;
}

function ValidateEmail()
{
    var val = document.getElementById('email').value;
    if (!val.match(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)) 
    {
        alert('Please Enter a Valid Email');
        return false;
    }
    
    return true;
}

function ValidatePassword() 
{
    var val = document.getElementById('password').value;
    
    if (!val.match("^(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[0-9])(?=.{8,})")) 
    {
        alert('MUST CONTAIN UPPERCASE,LOWERCASE AND MUST HAVE ATLEAST 8 OR MORE CHARACTER WITH NO SPACE');
        return false;
    }
    
    return true;
}

function showpassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }


function ValidateCPassword()
{
      var password1=document.getElementById("password").value;
      var password2=document.getElementById("confirmpassword").value;

      if (password1!=password2)
      { 
            alert('Passwords does not match');
            return false;
      }
 
      return true;
}

function ValidatePhone() 
{
    var val = document.getElementById('phone').value;
    
    if (!val.match(/^[0-9](?=.{9})/)) 
    {
        alert('Please Enter a Valid Phone Number');
        return false;
    }
    
    return true;
}

function ValidateGender()
{
      var o = document.getElementById('male');
      var t = document.getElementById('female');

      if ( (o.checked == false ) && (t.checked == false ) )
      {
            alert ( "Please choose a Gender:" );
            return false;
      }

      return true;
}

function ValidateTerms()
{
      if (document.getElementById("terms").checked == false)
      {
            alert("Please agree to the Terms and Conditions");
            return false;
      }
      return true;
}

function ValidateAll()
{
      if (ValidateFullName() && ValidateUsername() && ValidateMatricNo() && ValidateEmail() && ValidatePassword() && ValidateCPassword() && ValidatePhone() && ValidateGender() && ValidateTerms())
            {
                  alert('Registration Complete');
                  return true;
            }
      else
            {
                  alert('Form Incomplete');
                  return false;
            }
}

function myFunction() 
{
    document.getElementById("form1").reset();
}

function ValidateIC() 
{
    var val = document.getElementById('ic').value;
    
    if (!val.match(/^[0-9](?=.{11})/)) 
    {
        alert('Please Enter a Valid Identity Card Number (12 digits)');
        return false;
    }
    
    return true;
}
function ValidateCarAge() 
{
    var val = document.getElementById('carage').value;
    
    if (!val.match(/^[0-9](?=.{0})/)) 
    {
        alert('Please Enter your car age');
        return false;
    }
    
    return true;
}

function ValidateCarrate() 
{
    var val = document.getElementById('carrate').value;
    
    if (!val.match(/^[0-9](?=.{0})/)) 
    {
        alert('Please Enter your car rate');
        return false;
    }
    
    return true;
}

function ValidateCarratee() 
{
    var val = document.getElementById('carratee').value;
    
    if (!val.match(/^[0-9](?=.{0})/)) 
    {
        alert('Please Enter your car rate');
        return false;
    }
    
    return true;
}

function Validateloc()
{
      var e = document.getElementById("carloc");
      var strUser = e.options[e.selectedIndex].value;
      
      if(strUser==0)
            {
                  alert("Please select a location");
                  return false;
            }
      return true;
}

      

function ValidateAll2()
{
      if (ValidateFullName() && ValidateIC() && ValidatePassword() && ValidateCPassword() && ValidateCarAge() && ValidateCarrate() && ValidateCarratee() && Validateloc())
            {
                  alert('Registration Complete');
                  return true;
            }
      else
            {
                  alert('Form Incomplete');
                  return false;
            }
}

function readURL(input)
{
  if (input.files && input.files[0]) 
    {
        var reader = new FileReader();

        reader.onload = function (e) 
        {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function ValidateAll3()
{   
    if (ValidateFullName())
    {
        alert('Registration Complete');
        return true;
    }
    else
    {
        alert('Form Incomplete');
        return false;
    }
}




 
    
   