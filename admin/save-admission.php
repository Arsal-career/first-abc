<?php
require_once "includes/db.inc.php";
?>
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
// echo "<pre>";
// print_r($_POST);





$query = "INSERT INTO students (firstname, lastname, fathername, mothername, gender, dateofbirth, roll, bloodgroup, religion,  email, password, class, section, admissionid, phone, shortbio, pic  )

VALUES ('$firstname', '$lastname', '$fathername', '$mothername', '$gender', '$dateofbirth', '$roll', '$bloodgroup', '$religion', '$email', '$pass', '$class', '$section', '$admissionid',' $phone', '$shortbio', '$pic')";

if (mysqli_query($con,$query)) {
  echo "date are enterd";
}
else{
  echo mysqli_error($con);

}
// print_r($_SESSION);
}


header("Location: all-student.php");


?>
