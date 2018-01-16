<?php

include ('../db/database.php');
$ID = 0;
session_start();


if (! isset($_SESSION['id'])) {
    $ID = 100;
} // end if

if ($ID == 100 or $_SESSION['id'] != 1) {
    echo "<script>alert('You do not have sufficient Privileges. Admins Only. You have been logged out!')</script>";
    session_destroy();
    echo "<script>window.open('../','_self')</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="../js/myscripts.js"></script>
<link rel="stylesheet" href="css/mainAdmin.css" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>


<script type="text/javascript">

      $(document).ready(function(){

               $('.toggleThis').hide();
               $('.toggleThis2').hide();
               $('.toggleThis3').hide();
                $('.toggleThis4').hide();

               $('#showContents').click(function(){
                $('.toggleThis').slideToggle(100);
              });

              $('#showContents2').click(function(){
               $('.toggleThis2').slideToggle(100);
             });

             $('#showContents3').click(function(){
              $('.toggleThis3').slideToggle(100);
            });

            $('#showContents4').click(function(){
             $('.toggleThis4').slideToggle(100);
           });
      });



    </script>

<title>admin - Control Page</title>

</head>
<body>



	</script>

	<div>

		<form  method="post">

			<table align="center" width="70%" border="2">

				<tr class="tablePanel">
					<td colspan="9" align="center"><h2>2morrow's Party </h2><img src="images/music6.gif"
						alt="logo" height="200px"><h1>Welcome to the Admin Area: <?php echo $_SESSION['name2'];?></h1></td>
				</tr>


        <tr class="tablePanel" id='showContents' align="center" height="200">

          <td colspan="9" align="center"><h1 id='showContents'>Add Testamonials</h1></td>

        </tr>

        <tr class='toggleThis'>
          <td><b>Id</b></td>
          <td><b>By Name</b></td>
          <td><b>Date</b></td>
          <td><b>Message</b></td>
          <td><b>Status: showing</b></td>
          <td><b>Update</b></td>

        </tr>

        <tr>
                <?php
                // display all Testamonials

                $query1 = "SELECT * FROM testamonials WHERE display = 0 ORDER BY date DESC; ";

                $run = $mysqli->query($query1);
                while ($row = $run->fetch_array()) {
                    $id = $row['id'];
                    $message = $row['message'];
                    $customer = $row['customer'];
                    $date = $row['date'];
                    $status = $row['display'];
                    if($status == 0){
                      $status = 'false';
                    }
                    $output = '<tr class="toggleThis">

                          <form action="control.php?test='.$id.'" method="post">';

                      $output .= '<td name="test" value='.$id.'> ' . $id . '</td>';
                      $output .= '<td>' . $customer . '</td>';
                      $output .= '<td>' . $date . '</td>';
                      $output .= '<td>' . $message. '</td>';
                      $output .= '<td>' . $status . '</td>';
                      $output .= '<td>



                                <p><a class="btn btn-secondary" href="control.php?add_testamony=' . $id . '" role="button">Add to Main&raquo;</a></p>
                      </form>
                    </td>';
                    $output .= '</tr>';
                    echo $output;


                } // end query results



                ?>



                <tr class="tablePanel" id='showContents2' align="center" height="200">

                  <td colspan="8" align="center"><h1 id='showContents2'>Display Dates</h1></td>

                </tr>

                <tr class='toggleThis2'>
                  <td><b>Id</b></td>
                  <td><b>Date</b></td>
                  <td><b>Location</b></td>
                  <td><b>Time</b></td>


                </tr>

                <tr>
                        <?php
                        // display all dates

                        $query1 = "SELECT * FROM shows; ";

                        $run = $mysqli->query($query1);
                        while ($row = $run->fetch_array()) {
                            $id = $row['id'];
                            $date = $row['date'];
                            $location = $row['location'];
                            $time = $row['time'];


                            $output = '<tr class="toggleThis2">

                              <form action="control.php?test='.$id.'" method="post">';

                              $output .= '<td name="test" value='.$id.'> ' . $id . '</td>';
                              $output .= '<td>' . $date . '</td>';
                              $output .= '<td>' . $location . '</td>';
                              $output .= '<td>' . $time. ':00 PM</td></tr>';

                            echo $output;



                        } // end query results



                        ?>


				<tr  class="tablePanel" align="center" height="200">
					<td colspan="9" align="center"><a id="addProduct" href="logout2.php"><h1>Logout</h1></a></td>
				</tr>



			</table>

		</form>

	</div>

</body>
</html>

<?php
if (isset($_GET['add_testamony'])) {
   $id = sanitize($_GET['add_testamony']);


  $query2 = "UPDATE testamonials SET display = 1 WHERE id = ? ;";
  $stmt = $mysqli->prepare($query2);
  $stmt->bind_param("i",$id);
  $stmt->execute();
  print $stmt->error;
  $stmt->close();

  if($stmt != 0){
    echo "
    <script>
    var c = confirm('are you sure you want to display this testamonial?');
    if (c == false){

      alert('Testamonial not added');
        window.open('control.php','_self');
    }else{
      alert('Testamonial added');
      window.open('control.php','_self');
    }

      </script>

    ";

}
}

function sanitize($str){
  //clear white space
  $str = trim($str);
  //strip any slashes to preven sql injection
  $str = stripslashes($str);
  //prevent crosssite scripting
  $str = htmlspecialchars($str);

  return $str;

}


 ?>
