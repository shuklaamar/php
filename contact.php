<?php include('contactserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>contact Us</h2>
	</div>
	
	<form method="post" action="contact.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
        <div class="input-group">
			<label>Sugesstions</label>
			<input type="text-area" name="textarea" value="<?php echo $textarea; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">submit</button>
		</div>
	</form>
</body>
</html>