<?php include('partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
	<li><?= $user->name ;?></li>
<?php endforeach; ?>

	<h1>Submit Your Name</h1>

	<form method="POST" action="/names">
		<input type="" name="name"></input>
		<button type="submit">Submit</button>

	</form>

<?php include('partials/footer.php'); ?>
 