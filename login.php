<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>যোগাযোগ - জাবিইপা</title>
	<link rel="shortcut icon" href="image/juil-logo.ico" type="image/x-icon">

	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="https://kit.fontawesome.com/899adf5c9e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>


		<form action="login-check.php" method="post">
			<h2>ADMIN LOGIN</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label>Username</label>
			<input type="text" name="uname" placeholder="Username" required><br>
	
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" required><br>
	
			<button type="submit">Login</button>
		</form>


</body>

</html>