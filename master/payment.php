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
        
    <h2 id="login">PAYMENT</h2>
        
    <body>
            <form  action="" method="POST" id="form1"> 
            <table border="0">

            <tr>
                <th><label >CHOOSE PAYMENT METHOD :</th>
                <td><select name="PAYMENT" required>
                    <option value="-1" >[choose yours]</option>
                    <option value="VISA"  >VISA</option>
                    <option value="MASTERCARD" >MASTERCARD</option>
                    <option value="AMEX" >AMEX</option></select></td>
            </tr>

            <tr>    
                <th>NAME ON CARD :</th>
                <td><input type="text" id="fullname" onchange="ValidateFullName()" required ></td>
            </tr>
               
            <tr>  
                <th>CARD NUMBER : </th> 
                <td><input type="number" required ></td>
            </tr>

            <tr>
                <th>EXPIRY DATE (MM/YY) : </th> 
                <td><input type="number" placeholder="MONTH" required ></td>
                <td><input type="number" placeholder="YEAR" required ></td>    
            </tr>

            <tr>     
                <th>SECURTIY NUMBER : </th> 
                <td><input type="number" min="100" required ></td>
            </tr>
            </table>     
        
                <input type="submit" onclick="return ValidateAll3()">
                <input type="button" onclick="myFunction()" id="myForm" value="RESET"></P>    
        
            </form>
    </body>
</html>

                