<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP studies</title>
</head>
<body>
<p>
	this page name is "<strong>
			<?= $_GET['name'];?>
		"</strong>

</p>
	<ul>
			
		
		<li>
			<?php
				echo $city['submit']? "&#9989" : "&#10062";
			?>

		</li>

		<br>

		
	</ul>

	<p>
		<?php /*
		$state = readline('your state please:');
		switch($state)
		{
			case "Uk": case "Ukraine": case "Ukraina":
			break;
			default:
			echo("I dont understand");
		}*/
		?>
	</p>

	<?php 
	for ($counter = 1; $counter <=100; $counter++)
	print($counter ."; ");
	?>
<br>
<br>
	<?php
		foreach ($pizzas as $topping => $price)
		{
			echo ("a whole $topping pizza costs \$
				$price;" ."<br>");
			
			
		}

	?>
	
</body>
</html>