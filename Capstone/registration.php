<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"/>

  <title>Registration</title>
</head>
<body>

<?php




// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('c_mysqliconnect.php'); // Connect to the db.

	$errors = array(); // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['fname'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['fname']));
	}

	// Check for a last name:
	if (empty($_POST['lname'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['lname']));
	}

	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass'])) {
		if ($_POST['pass'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}

	if (empty($errors)) {

		// Register the user in the database...

		// Make the query:
		$q = "INSERT INTO user1 (fname, lname, email, pass) VALUES ('$fn', '$ln', '$e', '$p')";


		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.

			// Print a message:

			echo '<h1>Thank you!</h1>
		<p>You are now registered for Campus Cravings</p><p><br /></p>';?>
    <div class="alert alert-success" role="alert">
        You have been successfully registered. <a href="login.php">Click here to login.</a>
    </div>
<?php
		} else {

			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

		}

		mysqli_close($dbc); // Close the database connection.



		exit();

	} else {

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';

	}

	mysqli_close($dbc);

}  // End of the main Submit conditional.
?>



<?php include("navbar.php");?>




<h1>Register</h1>
<form action="registration.php" method="post">
	<div class="container mt-5">
	<div class="row">
		<div class="col">
			<input type="text" name="fname" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" placeholder ="First Name" class="form-control bg-warning text-black my-3 text-center"/></p>
		</div>
		<div class="col">
			<input type="text" name="lname"  value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>" placeholder ="Last Name" class="form-control bg-warning text-black my-3 text-center"/></p>
		</div>
	</div>
	<input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  placeholder ="Email" class="form-control bg-warning text-black my-3 text-center" /> </p>
	<input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" placeholder ="Password" class="form-control bg-warning text-black my-3 text-center" /></p>
	<input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" placeholder ="Confirm" class="form-control bg-warning text-black my-3 text-center" /></p>
	<input type="submit" name="submit" value="Register" class="btn btn-warning"/></p>
</form>



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php

include('footer.php');
?>
</body>
</html>
