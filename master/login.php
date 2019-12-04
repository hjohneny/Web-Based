<!DOCTYPE html>
<html>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
        <script src="js/java.js"></script>
        <head>
        <title>Unicars</title>
        <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
        <img src="img/lg1.png" width="120" height="100">
        CAR RENTAL SERVICE
        </h1>
        </head>

        <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="">SERVICES</a></li>
                    <li><a href="login.php">LOG IN</a></li>
                </ul>
        </nav>

        <h2 id="login">LOG IN</h2>

<body>      
<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form id="login" method="POST">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
                                                <td><input type="password" name="pass" id="password" placeholder="Enter Password" required></td>
                                                <td><input type="checkbox" onclick="showpassword()">Show Password</td>
					</tr>
					<tr>
                                                <td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login"></td>
                                        </tr>
                                        <tr>
                                                <td colspan="2"><a href="user_signup_customer.php">New to Car Rental? Sign Up Now</a></td>
                                        </tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful!\");
									window.location = (\"renter/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. User not found.\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
                        <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>

		</div>

        </section><!--  end login section  -->
  
        <footer>
        Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
        </footer><!--  end footer  -->
</body>

</html>