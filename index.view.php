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
	
</body>
</html>