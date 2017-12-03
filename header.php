<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#2f4f4f;">

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
			
				<li><a <?php $place_2=false; ?> href="index.php" >Home </a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php" text-align:center;">Sign up</a>
						<a href="#" text-align:center;">Guest</a>';
						
					}
				?>
			</div>
		</div>
	</nav>
</header>