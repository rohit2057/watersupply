<link rel="stylesheet" type="text/css" href="/watersupply/libraries/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>

<?php
require 'views/dashboard/shared/usermenu.php';
?>
<center>
	<div style="width: 300px; margin-top: 100px;">
		<form method="POST" action="../Dashboard/UserRegistration">

			<label>Name:</label>
			<input class="form-control" type="text" name="uname" required />

			<label>Address:</label>
			<input class="form-control" type="text" name="uaddress" required />

			<label>Username:</label>
			<input class="form-control" type="text" name="uemail" required />

			<label>Uphone:</label>
			<input class="form-control" type="text" name="uphone" required />

			<label>Password:</label>
			<input class="form-control" type="text" name="upassword" required />
			<br>
			<input type="submit" name="register" value="Register" class="btn btn-primary" />
		</form>
	</div>
</center>

<?php
require_once "./views/dashboard/shared/footer.php";
?>