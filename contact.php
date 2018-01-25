
<?php
include 'db/database.php';

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">


<title>2morrows Party - Contact us</title>
<link rel="icon" href="images/favicon.png" type="image/png"
	sizes="16x16">



<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
	integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
	crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--jquery-->
<script src="js/jquery.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link href="css/main.css" rel="stylesheet">
<script src="js/myscripts.js"></script>


<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>

<style>
footer {
	background-color: #f2f2f2;
	padding: 25px;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Lobster"
	rel="stylesheet">

</head>

<body>

	<div class="container">

		<header class="header clearfix">
			<img src="images/2mp.png" id="img">
			<nav id="whiteBlock">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item  "><a class="nav-link" href="testamonials.php">Testamonials</a>
					</li>

					<li class="nav-item"><a class="nav-link" href="setlist.php">Setlist</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="contact.php">Contact
							<span class="sr-only">(current)</span>
					</a></li>
				</ul>

			</nav>


		</header>



		<div class="jumbo">
			<div class="cont" id="whiteBlock" width="100%" height="50%">

				<?php

				$query1 = "SELECT * FROM offers WHERE id = (SELECT EXTRACT(MONTH FROM sysdate())) ; ";
				$run = $mysqli->query($query1);
				while ($row = $run->fetch_array()) {
						$offername = $row['offername'];
						$details = $row['offerdetails'];
						$days = $row['numberofdaystorun'];
						$toPrint = '<h1 class="display-3">'.$offername.'</h1>';
						$toPrint .= '<p class="lead">'.$details.'</p>';

						echo $toPrint;
					}
				 ?>


				 <p>
					<a class="btn btn-primary" href="contact.php" role="button">Enquire
						Now</a>
				</p>


			</div>
		</div>



		<div class="bio" id="whiteBlock">
			<div class="row marketing">

				<div class="col-lg-12">
					<h1>Contact Us</h1>

					<form name="myform" id="myform" action="contact.php" method="post"
						onclick="return validateEnquiry();">

						<div class="form-group">
							<label for="name">Name</label> <input class="form-control"
								id="name" name="name" required>
							</textarea>
						</div>

						<div class="form-group">
							<label for="email">Email</label> <input class="form-control"
								id="email" name="email" type="email" required>
							</textarea>
						</div>

						<div class="form-group">
							<label for="number">Contact Number</label> <input
								class="form-control" type="number" id="number" name="number"
								required>
							</textarea>
						</div>


						<div class="form-group">
							<label for="date">Date</label> <input class="form-control"
								type="date" id="pickdate" size="8" name="date" required>
						</div>

						<div class="form-group">
							<label for="venue">Venue</label> <input class="form-control"
								id="venue" name="venue" required>
							</textarea>
						</div>


						<div class="form-group">
							<label for="query">Query</label>
							<textarea class="form-control" id="query" rows="3" name="query"
								required></textarea>
						</div>

						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>


				</div>

			</div>




		</div>
		<!-- /container -->
	</div>
	</div>

	<footer class="footer">

		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link" href="index.php">Home </a>
				</li>

				<li class="nav-item"><a class="nav-link" href="testamonials.php">Testamonials</a>
				</li>

				<li class="nav-item"><a class="nav-link" href="setlist.php">Setlist</a>
				</li>
				<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>

		</nav>

		<br> <b><p>2morrow's Party 2017 | by Eric Strong</p></b> <a
			href="https://www.facebook.com/2morrowsParty"><i
			class="fa fa-facebook"></i></a> <a
			href="https://www.youtube.com/channel/UCLa1uSkCAIthzuvWegJxrwA"><i
			class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-snapchat"></i></a>


		<a href="https://www.weddingsonline.ie/suppliers/2morrows-party"
			target="_blank"><img title="weddingsonline.ie"
			alt="weddingsonline.ie"
			src="https://www.weddingsonline.ie/contentimages/115/2013081511193058.png" width=54 style="background-color:white;" /></a>




		<br>



	</footer>


</body>
</html>

<?php

if (isset($_POST['submit'])) {

    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $number = sanitize($_POST['number']);
    $date = sanitize($_POST['date']);
    $venue = sanitize($_POST['venue']);
    $query = sanitize($_POST['query']);

    // insert with prepared statement
    // prepared statement - insert
    $query3 = "INSERT INTO queries (name,email,phone,date,venue,query) VALUES (?,?,?,?,?,?); ";
    $stmt = $mysqli->prepare($query3);
    $stmt->bind_param("ssssss", $name, $email, $number, $date, $venue, $query);
    $stmt->execute();
    print $stmt->error;
    $stmt->close();


    if ($stmt != 0) {

        $msg = "Wedding Enquiry from 2mp Website\nName:" . $name . "\nEmail:" . $email . "\nPhone Number:" . $number . "\nWedding Date: " . $date . "\nVenue:" . $venue . "\nQuery:" . $query;

        $subject = "Wedding Enquiry: " . $name;
        $mailto = "2morrowsparty@gmail.com";
        $headers = "From:  " . $email;
         $sent = mail($mailto, $subject, $msg, $headers);
				 echo '
				 <script>alert("Test'.$sent.'");</script>

				';

						 if($sent){

							 echo '
							 <script>alert("Thank you. Somebody will be in touch very soon");</script>

						 ';
						 echo "<script>window.open('index.php','_self')</script>";
					 }else{
				 echo "<script> alert('email didnt send');</script>";
					 }


    } else {
        echo '
      <script>alert("Something went wrong!");</script>
    ';
		 echo "<script>window.open('index.php','_self')</script>";
    }
}

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
