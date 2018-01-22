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


<title>2morrows Party - Wedding Band</title>
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
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
	width: 100%;
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

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


	<div class="container">

		<header class="header clearfix">

			<img src="images/2mp.png" id="img">


			<nav id="whiteBlock">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link active" href="#">Home </a>
					</li>
					<li class="nav-item"><a class="nav-link" href="testamonials.php">Testamonials</a>
					</li>

					<li class="nav-item"><a class="nav-link" href="setlist.php">Setlist</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>

			</nav>
		</header>

		<div class="jumbo">
			<div class="cont" id="whiteBlock" width="100%" height="50%">
				<h1 class="display-3">Sale Now On!</h1>
				<p class="lead">Free DJ with every booking, when booked this month</p>
				<p>
					<a class="btn btn-primary" href="contact.php" role="button">Enquire
						Now</a>
				</p>

			</div>
		</div>

		<div class="bio" id="whiteBlock">

			<i class="fa fa-calendar-o" aria-hidden="true"></i>
			<h1>Our Next Showcase</h1>
            <?php
            $query1 = "SELECT * FROM shows WHERE date > sysdate() ORDER BY date LIMIT 1 ; ";
            $run = $mysqli->query($query1);
            while ($row = $run->fetch_array()) {
                
                $location = $row['location'];
                $date = $row['date'];
                $time = $row['time'];
                
                echo '

                <div class="card" style="width: 100%;">
          <div class="card-header ">
            <i class="fa fa-calendar" aria-hidden="true"></i> Date: ' . $date . '
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Where: ' . $location . '</li>
            <li class="list-group-item">When: ' . $date . ' Time: ' . $time . ':00 PM</li>
          </ul>
        </div>
        <br>
              ';
            }
            
            ?>

            <br>

		</div>

		<main role="main" id="whiteBlock">


		<section class="row text-center placeholders" id="whiteBlock">
			<div class="col-6 col-sm-3 placeholder">
				<img src="images/sp17.jpg" width="200" height="200"
					class="img-fluid rounded-circle"
					alt="Generic placeholder thumbnail">
				<h4>Weddings</h4>
				<div class="text-muted">we do deadly weddings</div>
			</div>
			<div class="col-6 col-sm-3 placeholder">
				<img src="images/sp15.jpg" width="200" height="200"
					class="img-fluid rounded-circle"
					alt="Generic placeholder thumbnail">
				<h4>Events</h4>
				<span class="text-muted">Madness</span>
			</div>
			<div class="col-6 col-sm-3 placeholder">
				<img src="images/sp12.jpg" width="200" height="200"
					class="img-fluid rounded-circle"
					alt="Generic placeholder thumbnail">
				<h4>Pubs and Clubs</h4>
				<span class="text-muted">we have a mad set list</span>
			</div>
			<div class="col-6 col-sm-3 placeholder">
				<img src="images/sp10.png" width="200" height="200"
					class="img-fluid rounded-circle"
					alt="Generic placeholder thumbnail">
				<h4>Special Occassions</h4>
				<span class="text-muted">eric is class at web dev</span>
			</div>
		</section>






		<div id="carouselExampleIndicators" class="carousel slide"
			data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0"
					class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<!-- carousel-inner -->

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->


				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<img src="images/sp19.jpg" alt="2mp" width="460" height="345">
						<div class="carousel-caption">
							<h3>Weddings</h3>
							<p>We Cater for all genres</p>
						</div>
					</div>

					<div class="item">
						<img src="images/sp25.png" alt="2mp" width="460" height="345">
						<div class="carousel-caption">
							<h3>Parties</h3>
							<p>We supply a full rig, dj, lighting etc..</p>
						</div>
					</div>

					<div class="item">
						<img src="images/sp2.png" alt="2mp" width="460" height="345">
						<div class="carousel-caption">
							<h3>You Special Occassion</h3>
							<p>We will fill the dance floor Guaranteed!</p>
						</div>
					</div>

					<div class="item">
						<img src="images/sp20.jpg" alt="2mp" width="460" height="345">
						<div class="carousel-caption">
							<h3>other stuff</h3>
							<p>blah blah</p>
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button"
					data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
					aria-hidden="true"></span> <span class="sr-only">Previous</span>
				</a> <a class="right carousel-control" href="#myCarousel"
					role="button" data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		
		</main>



		<div class="bio" id="whiteBlock">

			<i><h1>Now its's A Party!</h1></i> Sick of the same cheesy bands?
			2morrow's party are a fresh and funky wedding party band covering all
			genre's from A-Z . We'd love you to take 5 mins and look at our promo
			video and live wedding footage and let the dance floor do the
			talking. <br>
			<br> 2morrow's Party are a 5 piece, high energy and fun band who have
			played in venues such as the Aviva stadium, celebrated along side the
			Dublin GAA team to bring home Sam Maguire and even played corporate
			events for companies such as Ryanair and Coca-Cola. <br>
			<br> 2MP cover all bases to get party started and ensure you have an
			amazing night. Don't forget to check out our Wedding promo ; )



			2morrows Party is a Wedding Band from Louth servicing weddings
			throughout the local area including all counties Nationwide .

			2morrows Party is a professional Wedding Band that has been part of
			the Wedding Bands industry for seven years specialising in 80s, 90s,
			Dance, Pop, Country, Rock, Hip Hop, Funk and Current music for
			weddings and corporate events. .
			</p>


			<div class="fb-like" data-href="https://facebook.com/2morrowsparty"
				data-layout="standard" data-action="like" data-size="small"
				data-show-faces="true" data-share="true"></div>
		</div>


		<div class="row marketing" style="margin-left: 1px;">

			<div class="col-lg-4" id="whiteBlock">

				<i class="fa fa-headphones" aria-hidden="true"></i>


				<h4>Audio Samples</h4>
				<iframe width="100%" height="450" scrolling="no" frameborder="no"
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/45984319&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>



			</div>

			<div class="col-lg-3" id="whiteBlock">

				<i class="fa fa-flag" aria-hidden="true"></i>
				<h4>Upcomming Shows</h4>



        <?php
        // the following is to produce a upcomming shows on the index page
        $query1 = "SELECT * FROM shows WHERE date > sysdate() ORDER BY date ; ";
        $run = $mysqli->query($query1);
        while ($row = $run->fetch_array()) {
            
            $location = $row['location'];
            $date = $row['date'];
            $time = $row['time'];
            
            echo '

                <div class="card" style="width: 100%;">
          <div class="card-header ">
            <i class="fa fa-calendar" aria-hidden="true"></i> Date: ' . $date . '
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Where: ' . $location . '</li>
            <li class="list-group-item">When: ' . $date . ' Time: ' . $time . ':00 PM</li>
          </ul>
        </div>
        <br>
              ';
        }
        
        ?>

              </div>


			<div class="col-lg-4" id="whiteBlock">

				<i class="fa fa-phone" aria-hidden="true"></i>
				<h4>Get in Touch</h4>


				<div class="card" style="width: 100%;">
					<img class="card-img-top" src="images/sp2.png" alt="image">
					<div class="card-body">
						<a href="mailto:2morrowsparty@gmail.com?Subject=Enquiry">
							<h5 class="card-title">
								<i class="fa fa-envelope" aria-hidden="true"></i> Email:
								2morrowsparty@gmail.com </i>
						
						</a>
						</h5>
						</a>
						<hr>

						<h5 class="card-title">
							<i class="fa fa-phone" aria-hidden="true"> Phone: 085000000</i>
						</h5>
						<hr>

						<h5 class="card-title">
							<a href="https://www.facebook.com/2morrowsParty"><i
								class="fa fa-facebook"></i></a> Facebook.com/2morrowsparty
						</h5>



						<hr>


					</div>
					<div class="fb-like" data-href="https://facebook.com/2morrowsparty"
						data-layout="button_count" data-action="like" data-size="small"
						data-show-faces="true" data-share="true"></div>
					<br>

				</div>

			</div>


		</div>




		<div class="row marketing" style="margin-left: 5px;">

			<div class="col-lg-4" id="whiteBlock">

				<i class="fa fa-comments-o" aria-hidden="true"></i>
				<h4>Testamonials</h4>


      <?php
    // the following is to produce a testamonial on the index page
    $query1 = "SELECT * FROM testamonials WHERE display = 1 ORDER BY RAND() limit 0,5; ";
    
    $run = $mysqli->query($query1);
    while ($row = $run->fetch_array()) {
        
        $message = $row['message'];
        $customer = $row['customer'];
        $date = $row['date'];
        
        echo '

              <div class="card" style="width: 100%;">
        <div class="card-header">
        <i class="fa fa-smile-o" aria-hidden="true"></i>   Review by: ' . $customer . '
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Wedding Date: ' . $date . '</li>
          <li class="list-group-item">' . $message . '</li>
            <li class="list-group-item">    <img src="images/5stars.png" alt="2mp" width="100%" ></li>

        </ul>
      </div>
      <br>

            ';
    }
    
    ?>
       <br> <a href="testamonials.php">for more click here</a>

			</div>

			<div class="col-lg-7" id="whiteBlock" style="margin-left: 3%;">

				<i class="fa fa-play" aria-hidden="true"></i>
				<h4>Videos</h4>


				<div>
					<p>Check out our Promo Video. You will not be disapointed</p>
					<iframe width="98%" height="500px"
						src="https://www.youtube.com/embed/tvARmKG-S_4?start=6"
						frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

				</div>

				<div>
					<h4>another cool video</h4>
					<p>college gigs and shit</p>
					<iframe width="98%" height="500px"
						src="https://www.youtube.com/embed/IThGXN1k9ww?start=10"
						frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

				</div>

				<div>
					<h4>some other mad video</h4>
					<p>show different types of genre</p>

					<iframe width="98%" height="500px"
						src="https://www.youtube.com/embed/dPk1mgmNeiY" frameborder="0"
						allow="autoplay; encrypted-media" allowfullscreen></iframe>

				</div>


			</div>


		</div>







	</div>
	<!-- /container -->

	<footer class="footer">
		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link active" href="#">Home <span
						class="sr-only">(current)</span></a></li>

				<li class="nav-item"><a class="nav-link" href="testamonials.php">Testamonials</a>
				</li>

				<li class="nav-item"><a class="nav-link" href="setlist.php">Setlist</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>

		</nav>

		<br> <b><p>2morrow's Party 2017 | by Eric Strong</p></b> <a
			href="https://www.facebook.com/2morrowsParty"><i
			class="fa fa-facebook"></i></a> <a
			href="https://www.youtube.com/channel/UCLa1uSkCAIthzuvWegJxrwA"><i
			class="fa fa-youtube fa-6"></i></a> <a href="#"><i
			class="fa fa-snapchat"></i></a> <a
			href="https://www.weddingsonline.ie/suppliers/2morrows-party"
			target="_blank"><img title="weddingsonline.ie"
			alt="weddingsonline.ie"
			src="https://www.weddingsonline.ie/contentimages/115/2013081511193058.png" /></a>



	</footer>




</body>
</html>
