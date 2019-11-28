
//validate the passowrd
function check() {
   if(document.getElementById('password').value == document.getElementById('confirm_password').value) {
       document.getElementById('message').innerHTML = "match";
       return true;
   } else {
       document.getElementById('message').innerHTML = "no match";
       alert("THE PASSWORD NOT MATCH");
       return false;
   }
}

function ValidateEmail() {
    var val = document.getElementById('email').value;
    if (!val.match(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)) 
    {
        alert('must contain "@" and ".com" in the email' );
        return false;
    }
    
    return true;
}
   


function Validate() 
{
    var val = document.getElementById('name').value;
    
    if (!val.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
    
    return true;
}

function Validate2() 
{
    var val = document.getElementById('name2').value;
    
    if (!val.match(/^[0-9](?=.{4})/)) 
    {
        alert('Only number are allowed adn atleast 5 number');
        return false;
    }
    
    return true;
}

function ValidateIC() 
{
    var val = document.getElementById('ic').value;
    
    if (!val.match(/^[0-9](?=.{11})/)) 
    {
        alert('Only 12 number allowed');
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

function myFunction() {
    document.getElementById("form1").reset();
  }

  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function ValidateState()
{
      var e = document.getElementById("dropdown");
      var strUser = e.options[e.selectedIndex].value;
      
      if(strUser==0)
            {
                  alert("Please select a State");
                  return false;
            }
      return true;
}

function ValidateAll()
{
      if (Validate() && Validate2() && ValidateEmail() && ValidatePassword() && ValidateIC() && check() && ValidateState())
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

 
    
   