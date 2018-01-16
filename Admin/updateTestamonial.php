<?php
include '../db/database.php';
$id = $_GET['test'];
$delete = "UPDATE `testamonials` SET display = 1 WHERE id = '$id'; ";
echo "
<script>
var c = confirm('are you sure you want to display this testamonial?');
if (c == false){

  alert('Profile not deleted');
    window.open('../','_self');
}

</script>";

echo "
  <script>
    alert('Testamonial added');
    window.open('control.php','_self')
  </script>
";

?>
