<?php 
	session_start();

	// variable declaration
	$oldusername = "";
	$username = "";
	$oldpassword = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$address_1 = "";
	$address_2 = "";
	$city = "";
	$state = "";
	$zipfive = "";


	// connect to database
	$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$address_1 = mysqli_real_escape_string($db, $_POST['address_1']);
		$address_2 = mysqli_real_escape_string($db, $_POST['address_2']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$zipfive = mysqli_real_escape_string($db, $_POST['zipfive']);

		// form validation: ensure that the form is correctly filled
		// validate(Address_1, Address_2, City, State, ZipFive)
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($password_2)) { array_push($errors, "Please confirm password"); }
		if (empty($address_1)) { array_push($errors, "Address 1 is required"); }
		if (empty($city)) { array_push($errors, "City is required"); }
		if (empty($state)) { array_push($errors, "State is required"); }
		if (empty($zipfive)) { array_push($errors, "Zipcode is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		$validate = shell_exec("python VerificationAPI.py $address_1 $address_2 $city $state $zipfive");

		if ($validate[0] == "F"){
			array_push($errors, "Please enter a valid address");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password, address_1, address_2, city, state, zipfive) 
					  VALUES('$username', '$email', '$password', '$address_1', '$address_2', '$city', '$state', '$zipfive')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	// CHANGING ACCOUNT INFORMATION
	if (isset($_POST['acc_changed'])) {
		// receive all input values from the form
		$oldusername = mysqli_real_escape_string($db, $_POST['oldusername']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$oldpassword = mysqli_real_escape_string($db, $_POST['oldpassword']);
		$address_1 = mysqli_real_escape_string($db, $_POST['address_1']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$zipfive = mysqli_real_escape_string($db, $_POST['zipfive']);

		// form validation: ensure that the form is correctly filled
		// validate(Address_1, Address_2, City, State, ZipFive)
		if (empty($oldusername)) { array_push($errors, "Old Username is required"); }
		// if (empty($email)) { array_push($errors, "Email is required"); }
		// if (empty($password_1)) { array_push($errors, "Password is required"); }
		// if (empty($password_2)) { array_push($errors, "Please confirm password"); }
		// if (empty($address_1)) { array_push($errors, "Address 1 is required"); }
		// if (empty($city)) { array_push($errors, "City is required"); }
		// if (empty($state)) { array_push($errors, "State is required"); }
		// if (empty($zipfive)) { array_push($errors, "Zipcode is required"); }

		// if ($password_1 != $password_2) {
		// 	array_push($errors, "The two passwords do not match");
		// }

		$validate = shell_exec("python VerificationAPI.py $address_1 $address_2 $city $state $zipfive");

		if ($validate[0] == "F"){
			array_push($errors, "Please enter a valid address");
		}

		$query = "SELECT * FROM users WHERE username='$oldusername'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 0) {
			array_push($errors, "Account does not Exist");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			// $password = md5($password_1);//encrypt the password before saving in the database
			if (!empty($password)){
				$password = md5($password_1);//encrypt the password before
				$query = "UPDATE users SET password = '$password' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($email)){
				$query = "UPDATE users SET email = '$email' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($address_1)){
				$query = "UPDATE users SET address_1 = '$address_1' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($city)){
				$query = "UPDATE users SET city = '$city' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($state)){
				$query = "UPDATE users SET state = '$state' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($zipfive)){
				$query = "UPDATE users SET zipfive = '$zipfive' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}
			if (!empty($username)){
				$query = "UPDATE users SET username = '$username' WHERE username = '$oldusername'";
				mysqli_query($db,$query);
			}


			// $query = "INSERT INTO users (username, email, password, address_1, address_2, city, state, zipfive) 
			// 		  VALUES('$username', '$email', '$password', '$address_1', '$address_2', '$city', '$state', '$zipfive')";
			// mysqli_query($db, $query);

			// $_SESSION['username'] = $username;
			// $_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

?>