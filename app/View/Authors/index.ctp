<h2>Authors</h2>
<?php foreach ($authors as $author) : ?>
<p>
	<span><b>Name</b>:&nbsp;<?php echo $author['Author']['last_name'].', '.$author['Author']['first_name'] ?></span><br />
	<span><b>Username</b>:&nbsp;<?php echo $author['Author']['username'] ?></span><br />
</p>
<?php endforeach; ?>
