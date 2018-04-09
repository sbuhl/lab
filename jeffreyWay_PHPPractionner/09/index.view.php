<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The PHP Practitionner - Step 04 - PHP and HTML</title>
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
			<?php foreach($task as $heading => $value): ?>
				<li><strong><?= ucfirst($heading) ;?></strong> : <?= $value; ?></li>
			<?php endforeach ;?>
		</ul>

		<ul>
			<li>
				<strong>Name :</strong> <?=$task['title']; ?> 
			</li>
			<li>
				<strong>Due Date :</strong> <?=$task['due']; ?> 
			</li>
			<li>
				<strong>Responsable :</strong> <?=$task['assigned_to']; ?> 
			</li>
			<li>
				<strong>Status :</strong> <?php if($task['completed']) {
					 echo '&#9989';
					} else{
						echo 'En cours';
					}
				;?> 
			</li>

		</ul>
	</section>
</body>
</html>