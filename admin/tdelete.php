<?php

include "includes/db.inc.php";

$idno = $_GET ['idno'];

$query ="delete from teachers where idno = '$idno'";
$delete = mysqli_query($con, $query);

if($delete){
  header("location:all-teacher.php");
}







 ?>
