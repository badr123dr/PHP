<?php

	// Constants

	define("titre","practice arrays");

	// Variables

	$name="BADR EDDINE";
	$lesson=9;
	// Arrays

	$age_group=array("tenneger","adult","old");

	$Casablanca= array(
				"name"=>"casablanca",
				"color"=>"black"

	);

	$Nizhny=array(
		"name"=>"NizhnyTagil",
		"population"=>1256687



	);

	$fes=array(
		"name"=>"fes",
		"color"=>"white"
	);


	$peaple=array(
					array(
						"name"=>"khattab",
						"country"=>"Morocco"
						),
					array(
						"name"=>"Alyona",
						"country"=>"Russia"
						),
					array(
						"name"=>"Muller",
						"country"=>"Germany"
						)

	);

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo titre;?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo titre;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3> <?php 	echo $peaple[1]["name"];	?>	from <?php  echo $peaple[1]["country"];	?>									</h3>
				
				<p><?php 	echo $peaple[1]["name"];?> is quite the <?php 	echo $age_group[1];?> 
				she lives in beautiful city which is <?php 	echo $Nizhny["name"];?> that contains <?php 	echo $Nizhny["population"];?> as number of population
				</p>
				<h3></h3>
				<p></p>
				
				<h3></h3>
				<p></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
