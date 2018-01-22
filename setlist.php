
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


<title>2morrows Party - Setlits</title>
<link rel="icon" href="images/favicon.png" type="image/png"
	sizes="16x16">



<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
	integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
	crossorigin="anonymous">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
	integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
	crossorigin="anonymous"></script>
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
<script src="js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
	integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	crossorigin="anonymous"></script>

<style>
/* Remove the navbar's default margin-bottom and rounded borders */
.navbar {
	margin-bottom: 0;
	border-radius: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
	width: 100%;
}

td:hover {
	color: #a88e01;
	background-color: #ffffff;;
}

/* Add a gray background color and some padding to the footer */
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
				<ul class="nav nav-pills ">
					<li class="nav-item"><a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item"><a class="nav-link" href="testamonials.php">Testamonials</a>
					</li>

					<li class="nav-item active"><a class="nav-link" href="setlist.php">Setlist
							<span class="sr-only">(current)</span>
					</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>

			</nav>


		</header>



		<div class="jumbo">
			<div class="cont" id="whiteBlock" width="30%" height="50%">
				<h1 class="display-3">Sale Now On!</h1>
				<p class="lead">Free DJ with every booking, when booked this month</p>
				<p>
					<a class="btn btn-primary" href="contact.php" role="button">Enquire
						Now</a>
				</p>

			</div>
		</div>






		<div class="row marketing">


			<div class="col-md-11" id="whiteBlock"
				style="margin: 3%; padding: 3%;">

				<img src="images/sp2.png" width="50%;"> <br>
				<br>
				<div class="card" style="width: 100%">
					<div class="card-block">

						<p class="card-text">
						
						
						<p>
						
						
						<h2>Wedding Set</h2>


						<table class="table">
							<thead>
								<tr>
									<!-- <th scope="col">#</th> -->
									<th scope="col">Title</th>
									<th scope="col">Artist</th>
									<th scope="col">Preview</th>
								</tr>
							</thead>
							<tbody>

      <?php
    
    $query1 = "SELECT * FROM Setlist WHERE category = 'wedding' ORDER BY preview DESC ; ";
    $run = $mysqli->query($query1);
    while ($row = $run->fetch_array()) {
        
        $id = $row['id'];
        $title = $row['title'];
        $artist = $row['artist'];
        $preview = $row['preview'];
        
        echo '

          <tr>

            <td>' . $title . '</td>
            <td>' . $artist . '</td>

            ';
        if ($preview == 1) {
            echo '  <td>

              <audio controls>
<source src="audio/' . $title . '.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

              </td>';
        }
        
        echo '</tr>';
    }
    ?>

    </tbody>
						</table>


						<br>

					</div>
				</div>


			</div>

			<div class="col-md-11" id="whiteBlock"
				style="margin: 3%; padding: 3%;">

				<img src="images/sp4.jpg" width="50%;"> <br>
				<br>
				<div class="card" style="width: 100%">
					<div class="card-block">

						<p class="card-text">
						
						
						<p>
						
						
						<h2>Pub Set</h2>


						<table class="table">
							<thead>
								<tr>
									<!-- <th scope="col">#</th> -->
									<th scope="col">Title</th>
									<th scope="col">Artist</th>
									<th scope="col">Preview</th>
								</tr>
							</thead>
							<tbody>

      <?php
    
    $query1 = "SELECT * FROM Setlist WHERE category = 'pub' ORDER BY preview DESC ; ";
    $run = $mysqli->query($query1);
    while ($row = $run->fetch_array()) {
        
        $id = $row['id'];
        $title = $row['title'];
        $artist = $row['artist'];
        $preview = $row['preview'];
        
        echo '

          <tr>

            <td>' . $title . '</td>
            <td>' . $artist . '</td>

            ';
        if ($preview == 1) {
            echo '  <td>
              <audio controls>
<source src="audio/' . $title . '.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

              </td>';
        }
        
        echo '</tr>';
    }
    ?>

    </tbody>
						</table>


						<br>

					</div>
				</div>


			</div>


		</div>





	</div>

	</div>



	<footer class="footer">

		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link" href="index.php">Home <span
						class="sr-only">(current)</span></a></li>

				<li class="nav-item"><a class="nav-link" href="testamonials.php">Testamonials</a>
				</li>

				<li class="nav-item"><a class="nav-link active " href="setlist.php">Setlist</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a>
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
			src="https://www.weddingsonline.ie/contentimages/115/2013081511193058.png" /></a>




	</footer>
</body>
</html>
