<?php  include "includes/db.inc.php";       ?>



<?php
if (isset($_POST['submit'])) {


  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $dateofbirth = $_POST['dateofbirth'];
  $idno = $_POST['idno'];
  $email = $_POST['email'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $shortbio = $_POST['shortbio'];
  $pic = $_POST['pic'];
  // UPDATE tablename SET col = val, col = val, col= val WHERE id = $id


  $query = "UPDATE teachers SET firstname = '$firstname', lastname = '$lastname',  gender = '$gender', dateofbirth = '$dateofbirth',   email = '$email', class= '$class',  section = '$section',  address = '$address',  phone = '$phone',  shortbio = '$shortbio' WHERE idno = '$idno'";

  $update = mysqli_query($con, $query);

  if ($update) {

    header("location:all-teacher.php");

  }

}

?>
