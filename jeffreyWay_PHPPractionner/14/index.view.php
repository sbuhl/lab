<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The PHP Practitionner - Step 13 - Intro to PDO</title>
	<style type="text/css">
		header{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>	
</head>

<body>
	<header>
		<h1>Task for the day</h1>
	</header>

	<section>

		<ul>
			<?php foreach ($tasks as $task) : ?>
				<li>
					<?php if($task->completed): ?>
						<strike><?= $task->description ;?></strike>
					<?php else: ?>
						<?= $task->description ; ?>
					<?php endif; ?>
						
				</li>
			<?php endforeach; ?>

		</ul>
	</section>
</body>
</html>