<?php include('partials/head.php'); ?>

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

<?php include('partials/footer.php'); ?>
