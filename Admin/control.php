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
                  $('.toggleThis5').hide();

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

           $('#showContents5').click(function(){
            $('.toggleThis5').slideToggle(100);
          });
      });



    </script>

<title>admin - Control Page</title>

</head>
<body>



	</script>

	<div>

		<form method="post">

			<table align="center" width="70%" border="2">

				<tr class="tablePanel">
					<td colspan="9" align="center"><h2>2morrow's Party</h2>
						<img src="images/music6.gif" alt="logo" height="200px">
					<h1>Welcome to the Admin Area: <?php echo $_SESSION['name2'];?></h1></td>
          <h1>Your Last Login was <?php

          $queryLast = "SELECT date FROM logins WHERE successful = 'true' and date < sysdate() ORDER BY date LIMIT 1; ";

          $run = $mysqli->query($queryLast);
            while ($row = $run->fetch_array()) {

              echo $row['date'];
            }

           ?></h1>

           <h1>Number of Failed Login Attempts: <?php

           $queryf = "SELECT number FROM logins WHERE successful = 'false'; ";


           $result = $mysqli->query($queryf);

           $numResults = mysqli_num_rows($result);

           echo $numResults;

            ?></h1>
				</tr>


				<tr class="tablePanel" id='showContents' align="center" height="200">

					<td colspan="9" align="center"><h1 id='showContents'>Add
							Testamonials</h1></td>

				</tr>

				<tr class='toggleThis'>
					<td><b>Id</b></td>
					<td><b>By Name</b></td>
					<td><b>Date</b></td>
					<td><b>Message</b></td>
					<td><b>Status: showing</b></td>
					<td><b>Update</b></td>
					<td><b>Delete</b></td>

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
                    if ($status == 0) {
                        $status = 'false';
                    }
                    $output = '<tr class="toggleThis">

                          <form action="control.php?test=' . $id . '" method="post">';

                    $output .= '<td name="test" value=' . $id . '> ' . $id . '</td>';
                    $output .= '<td>' . $customer . '</td>';
                    $output .= '<td>' . $date . '</td>';
                    $output .= '<td>' . $message . '</td>';
                    $output .= '<td>' . $status . '</td>';
                    $output .= '<td>



                                <p><a class="btn btn-secondary" href="control.php?add_testamony=' . $id . '" role="button">Add to Main&raquo;</a></p>
                      </form>
                    </td>';

                    $output .= '<td>



                              <p><a class="btn btn-secondary" href="control.php?del_testamony=' . $id . '" role="button">Delete</a></p>
                    </form>
                  </td>';

                    $output .= '</tr>';
                    echo $output;
                } // end query results

                ?>




				<tr class="tablePanel" align="center" height="200"
					id='showContents4'>
					<td colspan="9" align="center"><h1 id='showContents4'>Add Date</h1></td>
				</tr>

				<tr class='toggleThis4'>

					<td><b>Date</b></td>
					<td><b>Location</b></td>
					<td><b>Time</b></td>
					<td><b>Add</b></td>


				</tr>


				<tr class='toggleThis4'>

					<form action="control.php" method="post" id='showContents4'>
						<td><input type="date" name="date" value="Date"></td>
						<td><input type="text" name="location" value=""
							placeholder="Location"></td>
						<td><input type="time" name="time" value="Time"></td>
						<td><input type="submit" name="submitDate" value="Add Date"></td>

                  <?php
                if (isset($_POST['submitDate'])) {
                    $date = $_POST['date'];
                    $time = $_POST['time'];
                    $location = $_POST['location'];

                    $query2 = "INSERT INTO shows (date,location,time) VALUES (?,?,?); ";
                    $stmt = $mysqli->prepare($query2);
                    $stmt->bind_param("ssd", $date, $location, $time);
                    $stmt->execute();
                    print $stmt->error;
                    $stmt->close();

                    if ($stmt != 0) {
                        echo '
                              <script>alert("New date added");</script>

                            ';

                        echo "<script>window.open('control.php','_self')</script>";
                    } else {
                        echo '
                            <script>alert("Something went wrong!");</script>
                          ';
                    }
                }

                ?>




                  </form>


				</tr>



				<tr class="tablePanel" id='showContents2' align="center"
					height="200">

					<td colspan="10" align="center"><h1 id='showContents2'>Display
							Dates</h1></td>

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

                        $query1 = "SELECT * FROM shows WHERE date > sysdate() ORDER BY date; ";

                        $run = $mysqli->query($query1);
                        while ($row = $run->fetch_array()) {
                            $id = $row['id'];
                            $date = $row['date'];
                            $location = $row['location'];
                            $time = $row['time'];

                            $output = '<tr class="toggleThis2">

                              <form action="control.php?test=' . $id . '" method="post">';

                            $output .= '<td name="test" value=' . $id . '> ' . $id . '</td>';
                            $output .= '<td>' . $date . '</td>';
                            $output .= '<td>' . $location . '</td>';
                            $output .= '<td>' . $time . ':00 PM</td></tr>';

                            echo $output;
                        } // end query results

                        ?>




				<tr class="tablePanel" id='showContents5' align="center"
					height="200">

					<td colspan="9" align="center"><h1 id='showContents5'>Manage Leads</h1></td>

				</tr>

				<tr class='toggleThis5'>
					<td><b>Id</b></td>
					<td><b>Name</b></td>
					<td><b>Email</b></td>
					<td><b>Phone</b></td>
					<td><b>Date</b></td>
					<td><b>Venue</b></td>
					<td><b>Query</b></td>
					<td><b>Status</b></td>
					<td><b>Update</b></td>

				</tr>

				<tr>
                                <?php
                                // display all Testamonials

                                $query1 = "SELECT * FROM queries where status != 'complete' ORDER BY id ; ";

                                $run = $mysqli->query($query1);
                                while ($row = $run->fetch_array()) {
                                    $id1 = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $date = $row['date'];
                                    $venue = $row['venue'];
                                    $query = $row['query'];
                                    $status = $row['status'];

                                    $output = '<tr class="toggleThis5">';
                                    $output .= '<td> ' . $id1 . '</td>';
                                    $output .= '<td>' . $name . '</td>';
                                    $output .= '<td>' . $email . '</td>';
                                    $output .= '<td>' . $phone . '</td>';
                                    $output .= '<td>' . $date . '</td>';
                                    $output .= '<td>' . $venue . '</td>';
                                    $output .= '<td>' . $query . '</td>';

                                    $output .= '
                              					<td>

                                        <form id="myform" action="control.php?statusId=' . $id1 . '" method="post">
                                            <input name="statusId" value="' . $id1 . '" type="hidden">

                                        <select name="newStatus">
                      				              <option >' . $status . '</option>
                                            <option value="emailed">Emailed</option>
                                            <option value="phoned">Phoned</option>
                                            <option value="booked">Booked</option>
                                            <option value="lost">Lost</option>
                                            <option value="follow up">For Follow up</option>
                                            <option value="complete">Complete</option>
                                            <option value="pending">Pending</option>
                              					</select>

                                        </td>


                                      ';

                                    $output .= '<td>
                                          <input name="submitStatus" value="update" type="submit">
                                            </form>

                                    </td>';
                                    $output .= '</tr>';
                                    echo $output;
                                } // end query results

                                ?>






				<tr class="tablePanel" align="center" height="200">
					<td colspan="9" align="center"><a id="addProduct"
						href="logout2.php"><h1>Logout</h1></a></td>
				</tr>



			</table>

		</form>

	</div>

</body>
</html>

<?php
if (isset($_POST['submitStatus'])) {
    $id1 = sanitize($_POST['statusId']);
    $status1 = sanitize($_POST['newStatus']);

    $query2 = "UPDATE queries SET status = ? WHERE id = ? ;";
    $stmt = $mysqli->prepare($query2);
    $stmt->bind_param("si", $status1, $id1);
    $stmt->execute();
    print $stmt->error;
    $stmt->close();

    if ($stmt != 0) {
        echo '
        <script>alert("Status Updated");</script>

      ';

        echo "<script>window.open('control.php','_self')</script>";
    } else {
        echo '
      <script>alert("Something went wrong!");</script>
    ';
    }
}

if (isset($_GET['add_testamony'])) {
    $id = sanitize($_GET['add_testamony']);

    $query2 = "UPDATE testamonials SET display = 1 WHERE id = ? ;";
    $stmt = $mysqli->prepare($query2);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    print $stmt->error;
    $stmt->close();

    if ($stmt != 0) {
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

if (isset($_GET['del_testamony'])) {
    $id = sanitize($_GET['del_testamony']);

    $query2 = "DELETE FROM testamonials WHERE id = ? ;";
    $stmt = $mysqli->prepare($query2);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    print $stmt->error;
    $stmt->close();

    if ($stmt != 0) {
        echo "
    <script>
      alert('Testamonial deleted');
      window.open('control.php','_self');
      </script>

    ";
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
