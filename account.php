<?php
	include('./inc/connect.php'); // Database connection include

	// Turns form inputs into variables
	$username = $_GET["username"];
	$password = sha1($_GET["password"]);

	$info = $status = $usernameinfo = ""; // Creates global variables: info, status, and usernameinfo

	if(isset($_GET["register"])){ // If the register checkbox is checked, account is created in the database

		// mySQL query to search through the account db for the username
		$sql = "SELECT * FROM accounts WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_fetch_array($result)) { // If the username exists
			// Assigns information defining that account already exists
			$status = "fail";
			$info = "Account already exists";
		} else { // If the username doesn't exist in the account database
			$sql = "INSERT INTO accounts (username,password) VALUES ('$username','$password')"; // A new query string to insert the information into the database
			$result = mysqli_query($conn, $sql);

			$sql = "SELECT * FROM accounts WHERE username='$username'"; // After inserted, the username is regathered for use on the site using a new query
			$result = mysqli_query($conn, $sql);

			if(mysqli_fetch_array($result)) { // If the username exists in the database (in case inputting the info in the database didn't work)
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()) { // Fetch the row row from the database
					if($row['password'] == $password) { // If the password associated with the account and the password in the form match
						// Success message and account info is passed
						$info = $row['id'];
						$usernameinfo = $row['username'];
						$status = "success";
					} // End statement checking password
				} // End while loop searching through rows for account
			} // End statement checking for account in database
		} // End else statement for registering

	} else { // If the register box was not checked
		$sql = "SELECT * FROM accounts WHERE username='$username'"; // mySQL query searching the database for the account based on the username from the form
		$result = mysqli_query($conn, $sql);

		if(mysqli_fetch_array($result)) { // Searches array for account
			$result = mysqli_query($conn, $sql);	
			while ($row = $result->fetch_assoc()) { // Fetches account info
				if($row['password'] == $password) { // If the password matches, show success message and pass account info
					$info = $row['id'];
					$usernameinfo = $row['username'];
					$status = "success";
				} else { // If the password does not match, pass a fail message
					$status = "fail";
					$info = "Incorrect password";
				}
			}
		} else { // If accoun't isn't found, pass a fail message
			$status = "fail";
			$info = "Account doesn't exist";
		}
	}

	$logininfo = json_encode(array("status"=>$status,"info"=>$info,"username"=>$usernameinfo)); // JSON encode to pass status, info, and username as an array.
	echo $logininfo; // Pass info with echo
?>