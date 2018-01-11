

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


     <title>2morrows Party - Review us</title>
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

       <header class="header clearfix" id="whiteBlock">
         <br>    <br><br><br><br>    <br>    <br><br><br><br>    <br><br><br><br>    <br>    <br><br><br><br>
         <nav>
           <ul class="nav nav-pills float-right">
             <li class="nav-item">
               <a class="nav-link" href="index.php">Home </a>
             </li>
             <li class="nav-item active ">
               <a class="nav-link" href="testamonials.php">Testamonials <span class="sr-only">(current)</span></a>
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



         <div class="jumbotron" >
           <div class="cont" id="whiteBlock" width="30%" height="50%">
             <h1 class="display-3">Sale Now On!</h1>
             <p class="lead">Free DJ with every booking, when booked this month</p>
             <p><a class="btn btn-primary" href="contact.php" role="button">Enquire Now</a></p>

           </div>
           </div>



           <div class="col-lg-12" id="whiteBlock">
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
  <br>
         </div>




     </div> <!-- /container -->
   </div>
 </div>

     <footer class="footer">

       <nav>
         <ul class="nav nav-pills float-right">
           <li class="nav-item">
             <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

             echo "<script>window.open('testamonials.php','_self')</script>";
     }else{
       echo '
         <script>alert("Something went wrong!");</script>
       ';

     }

   }

  ?>
