<?php
//This php is for the user regististration part 
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_EMAIL = '';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usertest';
$errors = array(); 


// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the registration form
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	
	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }
	
	$emailInput = $_POST['email'];

	// first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT email FROM accounts WHERE email='$emailInput'";
	$result = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	
    if ($user) { // if user exists
		/*
		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}
	*/
		if ($user['email'] === $emailInput) {
		  array_push($errors, "email already exists");
		}
        echo'Already have an account!'; //this works
    }

/*
	function checkEmail($con, $email){
		$query1 = "SELECT email FROM accounts WHERE email='$email'";
		$result = $con->query($query1);
		if ($result->num_rows > 0) {
		  echo "<span style='color:red'>This Email is already exists </span>";
		}
	}

	if(!empty(isset($_POST['email'])) && isset($_POST['email'])){
		$email= $_POST['email'];
		checkEmail($con, $email);
	
	}

*/

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
        $passwordEncrypt = md5($password);//encrypt the password before saving in the database

        $query = "INSERT INTO accounts (username, email, password) 
                          VALUES('$username', '$email', '$passwordEncrypt')";
        mysqli_query($con, $query);
		session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
        //$_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in and registered!";
        header('Location: home.php');
		exit;
	
  }
}


?>