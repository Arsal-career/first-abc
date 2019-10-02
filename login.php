
<?php require_once  "includes/db.inc.php";?>
<?php
if(!empty($_SESSION['id'])){
  header("location:admin/index.php");
}

 ?>
<!doctype html>
<html lang="en">
<head>
  <title>university</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href=" color/color1.css">
  <link rel="stylesheet" href="#" id="colors">
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
</head>
<body>

  <header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand absolute" href="index.php">University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">

          <ul class="navbar-nav absolute-right">
            <li>
              <a href="login.php">Login</a>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->




<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(img/madison-yocum-1624867-unsplash.jpg);">
  <div class="container">
    <div class="row align-items-center justify-content-center site-hero-sm-inner">
      <div class="col-md-7 text-center">

        <div class="mb-5 element-animate">
          <h1 class="mb-2">Log in</h1>
          <!-- <p class="bcrumb"><a href="">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p> -->
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END section -->

<section class="site-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="form-wrap">
          <h2 class="mb-4">Log in with your account</h2>
          <form  method="POST">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Email</label>
                <input type="text" name="email" class="form-control py-2">
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12 form-group">
                <label for="name">Password</label>
                <input type="password" name="password" class="form-control py-2">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" name="login" value="Login" class="btn btn-primary px-5 py-2">
              </div>
            </div>
          </form>


          <?php
          if (isset($_POST['login'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query ="select * from users where email = '$email'";
            $select=mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($select);

            if ($row ['email'] != $email and $row['pass'] !=$password) {
              //$_SESSION['id'] = $row['id'];
              echo "error";
            }
            elseif($row ['email'] == $email and $row['pass'] ==$password){
              $_SESSION['email'] = $row ['email'];
              $_SESSION['firstname'] = $row ['firstname'];
              $_SESSION['lastname'] = $row ['lastname'];
              $_SESSION['status'] = $row ['status'];


              header("location:admin/index.php");

            }

          }









          if (isset($_POST['login'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query ="select * from teachers where email = '$email'";
            $select=mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($select);

            if ($row ['email'] != $email and $row['password'] !=$password) {
              $_SESSION['id'] = $row['id'];
              echo "eroor";
            }
            elseif($row ['email'] == $email and $row['password'] ==$password){
              $_SESSION['email'] = $row ['email'];
              $_SESSION['firstname'] = $row ['firstname'];
              $_SESSION['lastname'] = $row ['lastname'];
              $_SESSION['status'] = $row ['status'];
              header("location:admin/index.php");

            }

          }


          if (isset($_POST['login'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query ="select * from students where email = '$email'";
            $select=mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($select);

            if ($row ['email'] != $email and $row['password'] !=$password) {
              $_SESSION['id'] = $row['id'];
              echo "eroor";
            }
            elseif($row ['email'] == $email and $row['password'] ==$password){
              $_SESSION['email'] = $row ['email'];
              $_SESSION['firstname'] = $row ['firstname'];
              $_SESSION['lastname'] = $row ['lastname'];
              $_SESSION['status'] = $row ['status'];
              header("location:admin/index.php");

            }

          }


          ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once "includes/footer.php"; ?>
