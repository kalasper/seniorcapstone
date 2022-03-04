<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.




// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('c_mysqliconnect.php'); // Connect to db.
		
	$errors = array(); // errors
	
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

	//Checks for phone number:
	if (empty($_POST['phone'])) {
		$errors[] = 'You forgot to enter your phone number.';
	} else {
		$ph = mysqli_real_escape_string($dbc, trim($_POST['phone']));
	}
	
	//Checks for physical address:
	if (empty($_POST['address'])) {
		$errors[] = 'You forgot to enter your physical address.';
	} else {
		$ad = mysqli_real_escape_string($dbc, trim($_POST['address']));
	}
	
	//Checks for card number:
	if (empty($_POST['card'])) {
		$errors[] = 'You forgot to enter your card number.';
	} else {
		$c = mysqli_real_escape_string($dbc, trim($_POST['card']));
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO users (fname, lname, pass, phone, email, address, card) VALUES ('$fn', '$ln', '$e', '$p', '$ph' , '$ad','$c')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered for Campus Cravings</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
	
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc);

}  // End of the main Submit conditional.
}?>
<h1>Register</h1>
<form action="c_register.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" /></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>" /></p>
	<p>Phone <input type="text" name="phone" size="15" maxlength="20" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" /></p>
	<p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /> </p>
	<p>Password: <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"  /></p>
	<p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"  /></p>
	<p>Card Number <input type="text" name="card_number" size="15" maxlength="20" value="<?php if (isset($_POST['card'])) echo $_POST['card']; ?>" /></p>
	<p>Address: <input type="text" name="address" size="15" maxlength="20" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" /></p>
<p><input type="submit" name="submit" value="Register" /></p>
</form>