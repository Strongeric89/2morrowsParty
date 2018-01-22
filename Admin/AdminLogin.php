<?php
if (! ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
}
include ('../db/database.php');
session_start();
?>


<!DOCTYPE html>
<html>

<head>
<script src="../js/myscripts.js"></script>
<link rel="stylesheet" href="../css/main.css" type="text/css">

<title>Admin Login</title>
<link rel="icon" href="../images/favicon.png" type="image/png"
	sizes="16x16">


</head>

<body id="bg1">

	<div id="container">

		<div id="mainBanner">

			<div id="bannerLogo">

			</div>

		</div>


		<div id="maincontentAbout">

			<div id="aboutUs2" style="margin-left:40%;">
					<img src="../images/2mp.png" alt="logo" width=250 height=100>

				<h1>Admin Login</h1>


				<br> <br>
				<form id="loginForm" action="AdminLogin.php" method="post">

					<b>Username: </b><input type="email" name="username" id="username"
						value="" required> <br> <br> <b>Password: </b><input
						type="password" name="password" id="passord" value="" required> <br>
					<br> <br> <br> <br> <br> <input type="submit" name="login"
						value="Login">
				</form>




  <?php
if (isset($_POST['login'])) {
    // checking for correct credentials with prevent sql injections
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

		//sanitize
		$username = sanitize($username);
		$password = sanitize($password);

		$password = md5($password);

		$d = "" . date("Y/m/d h:i:sa");

    // if an admin is logging in -must contain admin in the email or password
    $selectQueryAdmin = "SELECT * FROM admins WHERE username = '$username' AND password = '$password' ";
    $result = $mysqli->query($selectQueryAdmin);
    $check1 = mysqli_num_rows($result);
    if ($check1 == 0) {
        echo "<script>alert('Username or password does not exist. Try Again');</script>";

				$msg = "A Log in attempt is been made by email: " . $username . " on " . $d;
				$subject = "Failed Login Attempts made to 2morrowsparty.tk ";
				$mailto = "2morrowsparty@gmail.com";
				$headers = "From: 2morrowsparty.tk ";
				mail($mailto, $subject, $msg, $headers);


    } // end if
    else {
        // get the id to begin the session.
        $selectQuery2 = "SELECT id,name FROM admins WHERE username = '$username' AND password = '$password' ";
        $result2 = $mysqli->query($selectQuery2);
        $numResults = mysqli_num_rows($result2);
        if ($numResults != 0) {
            echo "<script>alert('You have been logged in.');</script>";
        }
        if ($result2) {



            $_SESSION['id'] = 1;
            $_SESSION['name'] = $username;
            $_SESSION['name2'] = '';
            // get the name
            while ($row = $result2->fetch_assoc()) {
                $_SESSION['name2'] = $row['name'];
            }

						$msg = "A successfull Log in by " . $username . " has been made on " . $d;
						$subject = "Successfull Login made to 2morrowsparty.tk ";
						$mailto = "2morrowsparty@gmail.com";
						$headers = "From: 2morrowsparty.tk ";
						mail($mailto, $subject, $msg, $headers);
            // RELOCATE TO ANOTHER PAGE
          header('Location: control.php');
        } // end if
    } // end else
} // end if


function sanitize($str)
{
    // clear white space
    $str = trim($str);
    // strip any slashes to preven sql injection
    $str = stripslashes($str);
    // prevent crosssite scripting
    $str = htmlspecialchars($str);

    return $str;
}

?>

        </div>

		</div>
	</div>

</body>

</html>
