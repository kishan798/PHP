<?php require("partial/header.php"); ?>



<h1>All Users</h1>



<?php foreach ($users as $user):?>
<li><?= $user->name; ?></li>
<?php endforeach; ?>





<h1>Submit your name</h1>




<form method="POST" action="users">
	<input  name="name">
	<button type="submit">submit</button>
</form>



<?php require("partial/footer.php"); ?>

