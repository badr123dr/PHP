<?php
	
	// Constants
	define("titre","multidimensional array");
	
	// Custom Variables
	$myname="JOUAD BADR EDDINE";
	$lesson=8;
	$year=date('Y');
	// Moustache Multi-Dimensional Array
	$multiarray=array(
							array(
								1 =>  "blue",
								2=>"red",
								3=>"green",

							),

							array(
								1=>"pant",
								2=>"t-shirt",
								3=>"shoes",
								

							),

							array(
								1=>"tacos",
								2=>"pizza",
								3=>"panzaroti",


							),


					);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo titre;?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson;?>: <small><?php echo titre;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $multiarray[2][2];?>  of my food </h2>
				<p>this fucking item represent pizza as food  <strong><?php echo $multiarray[0][2];?> </strong> and takes <strong><?php echo $multiarray[1][2];?>  days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $multiarray[2][2];?>  of my food </h2>
				<p>this fucking item represent pizza as food  <strong><?php echo $multiarray[0][2];?> </strong> and takes <strong><?php echo $multiarray[1][2];?>  days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $multiarray[2][2];?>  of my food </h2>
				<p>this fucking item represent pizza as food  <strong><?php echo $multiarray[0][2];?> </strong> and takes <strong><?php echo $multiarray[1][2];?>  days</strong> to grow on average.</strong></p>
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
