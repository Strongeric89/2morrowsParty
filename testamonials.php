<?php

include 'db/database.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>2morrows Party - Testamonials</title>
    <link rel="icon" href="images/favicon.png" type="image/png"
    	sizes="16x16">



    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!--jquery-->
 <script src="js/jquery.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <script src="js/myscripts.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;

      }
      .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;

  }

      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <header class="header clearfix">
          <img src="images/2mp.png" id="img">
          <nav id="whiteBlock">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link " href="testamonials.php">Testamonials <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="setlist.php">Setlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>

        </nav>


      </header>



        <div class="jumbo" >
          <div class="cont" id="whiteBlock" width="30%" height="50%">
            <h1 class="display-3">Sale Now On!</h1>
            <p class="lead">Free DJ with every booking, when booked this month</p>
            <p><a class="btn btn-primary" href="contact.php" role="button">Enquire Now</a></p>

          </div>
          </div>

          <section class="row text-center placeholders" id="whiteBlock">
            <div class="col-6 col-sm-3 placeholder">
              <img src="images/sp17.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Weddings</h4>
              <div class="text-muted">we do deadly weddings</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="images/sp15.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Events</h4>
              <span class="text-muted">Madness</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="images/sp12.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Pubs and Clubs</h4>
              <span class="text-muted">we have a mad set list</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="images/sp10.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Special Occassions</h4>
              <span class="text-muted">eric is class at web dev</span>
            </div>
              add in a way to search through testamonials. search engine
          </section>







              <br>

              <div class="bio" id="whiteBlock">
                <div class="row marketing">

                  <div class="col-lg-12">
                    <h1>Testamonials</h1>
                    <p><a class="btn btn-primary" href="review.php" role="button">Leave a Review
          </a></p>

          <br>



              <?php


                  //the following is to produce a testamonial on the index page
                  $query1 = "SELECT customer, message, date FROM testamonials WHERE display = 1 ORDER BY date desc; ";
                  $run = $mysqli->query($query1);
                  while ($row = $run->fetch_array()) {

                      $message = $row['message'];
                      $customer = $row['customer'];
                      $date = $row['date'];

                      echo '

                      <div class="card" style="width: 100%;">
                <div class="card-header">
                <i class="fa fa-smile-o" aria-hidden="true"></i>   Review by: '.$customer.'
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Wedding Date: '.$date.'</li>
                  <li class="list-group-item">'.$message.'</li>

                </ul>
              </div>
              <br>
                    ';
                  }



               ?>








                </div>

              </div>









    </div> <!-- /container -->
  </div>
</div>

<footer class="footer">
  <nav>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="testamonials.php">Testamonials</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="setlist.php">Setlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>

  </nav>

  <br>
 <b><p>&copy; 2morrow's Party 2017 | by Eric Strong</p></b>
      <a href="https://www.facebook.com/2morrowsParty"><i class="fa fa-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCLa1uSkCAIthzuvWegJxrwA"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-snapchat"></i></a>

  <a href="https://www.weddingsonline.ie/suppliers/2morrows-party"  target="_blank"><img title="weddingsonline.ie" alt="weddingsonline.ie" src="https://www.weddingsonline.ie/contentimages/115/2013081511193058.png" /></a>

    </footer>


  </body>
</html>
