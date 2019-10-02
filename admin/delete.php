<?php

include "includes/db.inc.php";

$roll = $_GET ['roll'];

$query ="delete from students where roll = '$roll'";
$delete = mysqli_query($con, $query);

if($delete){
  header("location:all-student.php");
}







 ?>
