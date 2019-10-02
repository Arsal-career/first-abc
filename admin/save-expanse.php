<?php
require_once "includes/db.inc.php";
?>
<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $idno = $_POST['idno'];
  $expansetype = $_POST['expansetype'];
  $amount = $_POST['amount'];
  $phone = $_POST['phone'];
  $email =$_POST['email'];
  $status = $_POST['Status'];
  $date = $_POST['date'];
// echo "<pre>";
// print_r($_POST);





$query = "INSERT INTO addexpense (name, idno,  expansetype, amount, phone, email, status, date  )

VALUES ('$name', '$idno', '$expansetype', '$amount','$phone', '$email', '$status', '$date')";

if (mysqli_query($con,$query)) {
  echo "date are enterd";
}
else{
  echo mysqli_error($con);

}
// print_r($_SESSION);
}


// header("Location: all-parents.php");


?>
