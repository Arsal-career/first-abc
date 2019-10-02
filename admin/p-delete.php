<?php

include "includes/db.inc.php";

$idno = $_GET ['idno'];

$query ="delete from parent where idno = '$idno'";
$delete = mysqli_query($con, $query);

if($delete){
  header("location:all-parents.php");
}







 ?>
