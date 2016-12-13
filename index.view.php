<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php learning</title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>

	<ul>
		<?php foreach($tasks as $task): ?>

		<li>
			<?php if ($task->completed) : ?>
				<strike>
			<?php endif; ?>
			
			<?= $task->description; ?>

			<?php if ($task->completed) : ?>
				</strike>
			<?php endif; ?>
		</li>

		<?php endforeach; ?>
	</ul>

	
</body>
</html>