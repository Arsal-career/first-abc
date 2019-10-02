<?php
require_once "includes/db.inc.php";
?>
<?php

if (isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $dateofbirth = $_POST['dateofbirth'];
  $idno = $_POST['idno'];
  $bloodgroup = $_POST['bloodgroup'];
  $religion = $_POST['religion'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $class = $_POST['class'];
  $section = $_POST['section'];
  $phone = $_POST['phone'];
  $address =$_POST['address'];
  $shortbio = $_POST['shortbio'];
  $pic = $_POST['pic'];
// echo "<pre>";
// print_r($_POST);





$query = "INSERT INTO teachers (firstname, lastname,  gender, dateofbirth, idno, bloodgroup, religion,  email, password, class, section,  phone, address, shortbio, pic  )

VALUES ('$firstname', '$lastname', '$gender', '$dateofbirth', '$idno', '$bloodgroup', '$religion', '$email', '$pass', '$class', '$section', ' $phone','$address', '$shortbio', '$pic')";

if (mysqli_query($con,$query)) {
  echo "date are enterd";
}
else{
  echo mysqli_error($con);

}
// print_r($_SESSION);
}


header("Location: all-teacher.php");


?>
