<?php
	include('./inc/connect.php');

	if(isset($_GET['userid'])){
		$userid = $_GET['userid'];
		$sql = "SELECT * FROM accounts WHERE id='$userid'";
		$result = mysqli_query($conn, $sql);
		while ($row = $result->fetch_assoc()) {
			$usernameinfo = $row['username'];
			$logininfo = json_encode(array("username"=>$usernameinfo));
			echo $logininfo;
		}
		return;
	}

	$username = $_GET["username"];
	$password = sha1($_GET["password"]);
	$info;
	$status;
	$usernameinfo = " ";

	if(isset($_GET["register"])){

		$sql = "SELECT * FROM accounts WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_fetch_array($result)) {
			$status = "fail";
			$info = "Account already exists";
		} else {
			$sql = "INSERT INTO accounts (username,password) VALUES ('$username','$password')";
			$result = mysqli_query($conn, $sql);

			$sql = "SELECT * FROM accounts WHERE username='$username'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_fetch_array($result)) {
				$result = mysqli_query($conn, $sql);	
				while ($row = $result->fetch_assoc()) {
					if($row['password'] == $password) {
						$info = $row['id'];
						$usernameinfo = $row['username'];
						$status = "success";

					}
				}
			}
		}

	} else {

		$sql = "SELECT * FROM accounts WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_fetch_array($result)) {
			$result = mysqli_query($conn, $sql);	
			while ($row = $result->fetch_assoc()) {
				if($row['password'] == $password) {
					$info = $row['id'];
					$usernameinfo = $row['username'];
					$status = "success";
				} else {
					$status = "fail";
					$info = "Incorrect password";
				}
			}
		} else {
			$status = "fail";
			$info = "Account doesn't exist";
		}
	}

	$logininfo = json_encode(array("status"=>$status,"info"=>$info,"username"=>$usernameinfo));
	echo $logininfo;

	

?>