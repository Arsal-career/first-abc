<?php  include "includes/db.inc.php";       ?>



<?php
if (isset($_POST['submit'])) {


  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $bloodgroup = $_POST['bloodgroup'];
  $occupation = $_POST['occupation'];
  $address = $_POST['address'];
  $idno = $_POST['idno'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $shortbio = $_POST['shortbio'];
  $pic = $_POST['pic'];
  // UPDATE tablename SET col = val, col = val, col= val WHERE id = $id


  $query = "UPDATE parent SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', bloodgroup = '$bloodgroup', occupation = '$occupation', address= '$address', idno ='$idno', phone = '$phone', email = '$email', shortbio = '$shortbio' WHERE idno= '$idno'";

  $update = mysqli_query($con, $query);

  if ($update) {

    header("location:all-parents.php");

  }

}

?>
