<!DOCTYPE html>
<html>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
<head>
    <title>Unicars</title>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
    </h1>
</head>

<body>
    
<nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="">SERVICES</a></li>
            <li><a href="login.php">LOG IN</a></li>
        </ul>
</nav>

<section class="random">
	<div class="wrapper_random">
		<ul class="properties_list_random">
<?php
	include 'includes/config.php';
	$dir_path = "cars";
	$files = scandir($dir_path);
	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];
	$sel = "SELECT * FROM cars WHERE image = '$filename'";
	$rs = $conn->query($sel);
	$rws = $rs->fetch_assoc();
	?>
	<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
	<?php echo 'Recommendation for today';
	?>
	<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
	</a>
</ul>
</div>
</section>

<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Rate per hour: MYR '.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Type:'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

<footer>
Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
</footer><!--  end footer  -->

</body>
</html>