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


    <title>2morrows Party - Review </title>



    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!--jquery-->
 <script src="js/jquery.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <script src="js/myscripts.js"></script>
      <script src="js/validateForm.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">






    <style>
      .jumbotron {
        background-image: url('images/sp2.png');
        height:500px;
        background-repeat: no-repeat;
        background-size: cover;

      }
      .jumbotron .cont {

        color:blue
        font-size: 20px;
        font-weight: bold;
        position:relative;
        top:250px;
      }
    </style>


  </head>

  <body>

    <div class="container">
      <header class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="#">Testamonials <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="setlist.php">Setlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted" id="mainTxtTop">2morrow's Party - Wedding Band</h3>
          <hr>
      </header>


      <main role="main">



        <div class="jumbotron">
          <div class="cont">


          </div>
          </div>


        <div class="row marketing">

          <div class="col-lg-12">
            <h4>Leave a Review</h4>

<form name="myform" id="myform" action="review.php" method="post" onsubmit="return validate();">



  <div class="form-group">
    <label for="date">Date</label>
      <input class="form-control" type="date" id="pickdate" size="8" name="date" required>
         </div>

 <div class="form-group">
    <label for="reviewby">Review by</label>
    <input class="form-control" id="reviewby" name="reviewby" required></textarea>
  </div>


  <div class="form-group">
     <label for="review">Review</label>
     <textarea class="form-control" id="review" rows="3" name="review" required></textarea>
   </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
        </div>



      </main>

      <footer class="footer">
  <p>&copy; 2morrow's Party 2017 | by Eric Strong</p>
        <a href="https://www.facebook.com/2morrowsParty"><i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/channel/UCLa1uSkCAIthzuvWegJxrwA"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-snapchat"></i></a>



      </footer>

    </div> <!-- /container -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $reviewby = $_POST['reviewby'];
    $review = $_POST['review'];

    $query2 = "INSERT INTO testamonials (message,customer,date) VALUES ('$review','$reviewby','$date'); ";
    $run = $mysqli->query($query2);

    if($run != 0){
        echo '
          <script>alert("Thank you for your review!");</script>
        ';
    }else{
      echo '
        <script>alert("Something went wrong!");</script>
      ';

    }

  }

 ?>
