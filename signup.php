<html>
<?php
	include_once 'header.php';
?>
<style>
.background{background:#2f4f4f;}
</style>
<div class="background" style="background-color:#2f4f4f;">
<section class="main-container">
	<div class="main-wrapper">
		<h2 style="color:white;">Signup</h2>
		
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd2" placeholder="Password">
			<button type="submit" name="submit" style="background:#f67a7a;border-radius:250px;">Sign up</button>
		</form>
	</div>
</section>
</div>
<div class="background">
<?php
	include_once 'footer.php';
?>
</div>
</html>