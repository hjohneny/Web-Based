<!DOCTYPE html>
<html>

<head>
	<h1>CAR RENTAL SERVICES</h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
        <script src="js/java.js"></script>
</head>

<nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="">SERVICES</a></li>
            <li><a href="login.php">LOG IN</a></li>
        </ul>
</nav> 

<h2 id="customerinfo">CUSTOMER INFORMATION</h2>

<body>
        <form id="form1" method="POST"> 
        <table border="1">                
        <tr>
                <th>FULL NAME :</th>
                <td><input type="text" id="fullname" onchange="ValidateFullName()" required ></td>
	</tr>

        <tr>
                <th>USERNAME :</th>
                <td><input type="text" id="username" onchange="ValidateUsername()" required ></td>
        </tr>

        <tr>    
                <th>MATRIC NUMBER :</th>
                <td><input type="text" id="matric" onchange="ValidateMatricNo()" required></td>
        </tr>

        <tr>
                <th>EMAIL :</th>
                <td><input type="text" id="email" onchange="ValidateEmail()" required></td>
        </tr>

        <tr>   
                <th>PASSWORD :</th>
                <td><input id="password" type="password" onchange="ValidatePassword()" required></td>
        </tr>
        
        <tr>
                <th>CONFIRM PASSWORD:</th>
                <td><input type="password" id="confirmpassword" onchange="ValidateCPassword()" required></td>
        </tr>
        
        <tr>       
                <th>PHONE NUMBER:</th>
                <td><input type="tel" id="phone" onchange="ValidatePhone()" required></td>
        </tr>
        
        <tr>        
                <th>GENDER :</th>
                <td><input type="radio" name="gender" id="male" value="Male" required> Male
                	<input type="radio" name="gender" id="female" value="Female"  required> Female</td>
        </tr> 
        </table>                

        <table>
                <tr>
                        <input type="checkbox" id="terms" onclick="ValidateTerms()" required> I have read and agree to the Terms and Conditions and Privacy Policy<br>
                        <input type="checkbox" onclick="showpassword()">Show Password
                </tr>              
                
                <tr>
                        <th><P class="submit"><input type="submit" name="submit" value="REGISTER" onclick="return ValidateAll()" ></P></th>
                        <th><input type="button" onclick="myFunction()" id="myForm" value="Reset form">
                              
                </tr> 
        </table>       
              
        </form>

       <a id="submit" href="booking.php">Search for car</a>
</body>

</html>