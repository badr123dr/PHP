<?php
	
	// Constants
	define("titre","boucle while");

	
	// Custom Variables
	$lesson_number=19;

	$number=6;



?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number;?>: <small><?php echo titre;?></small></h1>
			<hr>
			
			<h2>My Example</h2>
			
			<div class="sandbox">
				
				<?php
				 
				   while($number<=25)
				   {
						echo $number."</br>";
						$number++;

				   }
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
