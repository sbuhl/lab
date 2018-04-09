	<!DOCTYPE html>
	<html>
	<head>
		<title>Document</title>
		<style type="text/css">
			header{
				background: #e3e3e3;
				padding: 2em;
				text-align: center;
			}
		</style>
	</head>
	<body>
	<?php require 'partials/nav.php';?> 
		
		<h1>Task of the day</h1>
		<ul>
			<?php foreach ($tasks as $task): ?>
				<li>
				<?php if ($task->completed): ?>
					<strike><?= $task->description; ?></strike>
				<?php else: ?>				
				<?= $task->description; ?>
				<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</body>
	</html>