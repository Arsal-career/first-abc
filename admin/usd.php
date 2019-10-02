<?php  include "includes/db.inc.php";       ?>



<?php
if (isset($_POST['submit'])) {


  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $gender = $_POST['gender'];
  $dateofbirth = $_POST['dateofbirth'];
  $roll = $_POST['roll'];
  $bloodgroup = $_POST['bloodgroup'];
  $religion = $_POST['religion'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $admissionid = $_POST['admissionid'];
  $phone = $_POST['phone'];
  $shortbio = $_POST['shortbio'];
  $pic = $_POST['pic'];
  // UPDATE tablename SET col = val, col = val, col= val WHERE id = $id


  $query = "UPDATE students SET firstname = '$firstname', lastname = '$lastname', fathername = '$fathername', mothername = '$mothername', gender = '$gender', dateofbirth = '$dateofbirth', roll= '$roll',  bloodgroup = '$bloodgroup', religion = '$religion',  email = '$email', password = '$pass',   class= '$class',  section = '$section',  admissionid = '$admissionid',  phone = '$phone',  shortbio = '$shortbio' WHERE roll = '$roll'";

  $update = mysqli_query($con, $query);

  if ($update) {

    header("location:all-student.php");

  }

}

?>
