<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		
		<li>
			<?= $task['homework']; ?>
		</li>
		<li>
			<?= $task['breakfast']; ?>
		</li>

		<li>
			<?= $task['job']; ?>
		</li>
		<li>
			<?= $task['completed']? 'complete' : 'incomplete'; ?>
		</li>

	</ul>
</body>
</html>