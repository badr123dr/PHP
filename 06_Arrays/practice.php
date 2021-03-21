<?php
	
	// Constants
	define("Titre","arrays");

	
	// Custom Variables
	$name1="JOUAD BADR EDDINE";
	$name2="YASSINE KHATTAB";
	$name3="OMAR LAHSSINI";
	$name4="FAZAZI MOHAMMED";
	
	// Moustache Array
	$names=array("JOUAD BADR EDDINE","YASSINE KHATTAB","OMAR LAHSSINI","FAZAZI MOHAMMED");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <!-- LESSON NUMBER -->: <small><?php echo Titre; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>la liste des noms :</h2>
				<ul>
				
					<li><?php echo $names[0]; ?>;</li>
					<li><?php echo $names[1];?></li>
					<li><?php echo $names[2];?></li>
					<li><?php echo $names[3];?></li>
				</ul>
				
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
