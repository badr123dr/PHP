<?php
	
	// Constants
	define("title" ,"assotiative arrays");
	

	// Custom Variables
	$myname="Badr-eddine";
	$lesson_number=7;
	$year=date('Y');
	
	// Moustache Associative Array
	
	$myarrays=array(
						"clothes" => "tshirt",
						99=>"juan antionio",
						"hand"=>81
	);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP </title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number;?>: <small><?php echo title;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $myarrays[hand] ;?> of my array</h2>
				<p>This element of array represent the number of hands <strong><!-- CREEP FACTOR --></strong> <strong><!-- GROWTH DAYS --> </strong> </strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $year?>;- <?php echo $myname?>;</small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
