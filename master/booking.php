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
    
<body>
        <form  action="showFormdata.php" method="POST" id="form1">
            <table border="1">                
                    <th><label >PICK-UP AND DROP OFF LOCATION :</label></th>
                    <td><select name="LOCATION" required >
                            <option value="-1" >[choose yours]</option>
                            <option value="KENANGA"  >KENANGA</option>
                            <option value="CEMPAKA" >CEMPAKA</option>
                            <option value="CEMPAKA" >CEMPAKA</option>
                            <option value="SAKURA" >SAKURA</option>
                            <option value="SEROJA" >SEROJA</option>
                            <option value="BRC" >BRC</option>
                            <option value="TAZ" >TAZ</option>
                            <option value="DAHLIA" >DAHLIA</option></select></td></table><br \><br \>
            
            <table border="0">
                    <th ><label for="name"  >TIME START :</label> </th> 
                    <th ><label for="name">DURATION(HOUR)</label> </th> 
                <tr>                
                                                  
                        <td style="padding: 10px; "><input type="time" id="TIME" name="time1"  required ></td>                               
                        <td style="padding: 10px; "><input type="number" name="number" min="3" placeholder="Minimum 3 Hour"  required ></td></tr>
                    </table>

            <table border="0">                
                    <th><label >PICK-UP DATE  :</label></th>
                    <tr>
                    <td><select name="MONTH" required >
                            <option value="-1" >[Choose Month]</option>
                            <option value="JANUARY">JANUARY</option>
                            <option value="FEBRUARY">FEBRUARY</option>
                            <option value="MARCH">MARCH</option>
                            <option value="APRIL">APRIL</option>
                            <option value="MAY">MAY</option>
                            <option value="JUN">JUN</option>
                            <option value="JULY">JULY</option>
                            <option value="AUGUST">AUGUST</option>
                            <option value="SEPTEMBER">SEPTEMBER</option>
                            <option value="OCTOBER">OCTOBER</option>
                            <option value="NOVEMBER">NOVEMBER</option>
                            <option value="DECEMBER">DECEMBER</option></td>
                    
                        <th><label></label></th>       
                        <td><select name="DAY" required >
                                <option value="-1" >[Choose Day]</option>
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                                <option value="SUNDAY">SUNDAY</option>     
                            
                                <td style="padding: 10px;"><input type="number" name="number2" min="2019"  required ></td></tr>
               
                    <table border="0">                
                    <th><label >DROP OFF DATE  :</label></th>
                    <tr>
                    <td><select name="MONTH" required >
                            <option value="-1" >[Choose Month]</option>
                            <option value="JANUARY">JANUARY</option>
                            <option value="FEBRUARY">FEBRUARY</option>
                            <option value="MARCH">MARCH</option>
                            <option value="APRIL">APRIL</option>
                            <option value="MAY">MAY</option>
                            <option value="JUN">JUN</option>
                            <option value="JULY">JULY</option>
                            <option value="AUGUST">AUGUST</option>
                            <option value="SEPTEMBER">SEPTEMBER</option>
                            <option value="OCTOBER">OCTOBER</option>
                            <option value="NOVEMBER">NOVEMBER</option>
                            <option value="DECEMBER">DECEMBER</option></td>
                    
                        <th><label></label></th>       
                        <td><select name="DAY" required >
                                <option value="-1" >[Choose Day]</option>
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                                <option value="SUNDAY">SUNDAY</option>     
                            
                                <td style="padding: 10px;"><input type="number" name="number3" min="2019"  required ></td></tr>

                <table border="0" id="booking">
                        <input type="checkbox" name="condition" value="ageee" required>I AM ABOVE 18<br>
                        
                        <th><P class="submit"><input type="submit" name="submit" value="SEARCH" ></P></th>
                        <th><input type="button" onclick="myFunction()" id="myForm" value="RESET"></th>

                        <td><div><a href="showDetail.php"><h4 >GO TO CAR DETAIL</h4></a></div></td>
                        </table>
                       
                                           
                </body>
               <br />
</html>
