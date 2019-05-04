<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="./css/style.css">
		<title>College CMS</title>
	</head>

	<body>
		<nav id="navbar">
			<div class="container">
				<div id="logo" class="h3">
					<a href="<?php $_SERVER['PHP_SELF']; ?>" class="navbar-logo nav-link">
						<span class="text-primary">CMS</span>Project
					</a>
				</div>
				<ul id="navbar-ul" class="nav-ul">
					<li class="nav-list"><a href="#login" class="nav-link" id="login">Login</a></li>
					<li class="nav-list"><a href="#register" class="nav-link" id="register">Sign Up</a></li>
				</ul>
			</div>
		</nav>

		<!-- <div id="login">
			Login Here
		</div> -->

		<div id="register">
			<h3 class="h3">Sign Up</h3>
			<p>Please sign up here for authorization services</p>
			<form action="register.php" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group">
						<label for="firstname">Firstname<sup class="compulsory">*</sup></label>
						<input type="text" name="firstname" id="firstname" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="lastname">Lastname<sup class="compulsory">*</sup></label>
						<input type="text" name="lastname" id="lastname" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="email">Email<sup class="compulsory">*</sup></label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="pass">Password<sup class="compulsory">*</sup></label>
						<input type="password" name="pass" id="pass" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="dob">Date Of Birth<sup class="compulsory">*</sup></label>
						<input type="date" name="dob" id="dob" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="gender">Gender<sup class="compulsory">*</sup></label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Select</option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							<option value="T">Transgender</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="address">Address<sup class="compulsory">*</sup></label>
						<textarea name="address" id="address" class="form-control form-control-textarea"></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="city">City <sup class="compulsory">*</sup></label>
						<input type="text" name="city" id="city" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="state">State <sup class="compulsory">*</sup></label>
						<input type="text" name="state" id="state" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="pincode">Pincode <sup class="compulsory">*</sup></label>
						<input type="text" name="pincode" id="pincode" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="username">Username <sup class="compulsory">*</sup></label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="photo">Photo <sup class="compulsory">*</sup></label>
						<input type="file" name="photo" id="photo" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<input type="submit" value="Register" class="btn btn-submit">
					</div>
					<div class="form-group">
						<input type="reset" value="Reset" class="btn btn-reset">
					</div>
				</div>
			</form>
		</div>

		<script src="js/modal.js"></script>
	</body>

</html>