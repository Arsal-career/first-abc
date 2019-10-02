<?php require_once 'includes/header.php'; ?>
<?php

$query = "select * from students ";
$select = mysqli_query($con, $query);

//    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
// }
?>


<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Student Details</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Student Details Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>About Me</h3>
        </div>


        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button"
          data-toggle="dropdown" aria-expanded="false">...</a>

          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
          </div>
        </div>

      </div>



      <form class="mg-b-20">
        <div class="row gutters-8">
          <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by Roll ..."  class="form-control">
          </div>

          <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
          </div>
        </div>
      </form>
      <?php
      while ($row = mysqli_fetch_assoc($select)) {
        ?>


        <div class="single-info-details">
          <div class="item-img">
            <img src="img/figure/student1.png" alt="student">
          </div>
          <div class="item-content">
            <div class="header-inline item-header">
              <h3 class="text-dark-medium font-medium"><?php echo $row['firstname'] ?></h3>
              <div class="header-elements">
                <ul>
                  <li><a href="#"><i class="far fa-edit"></i></a></li>
                  <li><a href="#"><i class="fas fa-print"></i></a></li>
                  <li><a href="#"><i class="fas fa-download"></i></a></li>
                </ul>
              </div>
            </div>
            <p><?php echo $row['shortbio'] ?></p>
              <div class="info-table table-responsive">
                <table class="table text-nowrap">
                  <tbody>
                    <tr>
                      <td>Roll:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['roll'] ?></td>
                    </tr>
                    <tr>
                      <td>First Name:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['firstname'] ?></td>
                    </tr>
                    <tr>
                      <td>lastname:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['lastname'] ?></td>
                    </tr>
                    <tr>
                      <td>Gender:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                      <td>Father Name:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['fathername'] ?></td>
                    </tr>
                    <tr>
                      <td>Mother Name:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['mothername'] ?></td>
                    </tr>
                    <tr>
                      <td>Date Of Birth:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['dateofbirth'] ?></td>
                    </tr>
                    <tr>
                      <td>Religion:</td>
                      <td class="font-medium text-dark-medium"><?php echo $row['religion'] ?></td>
                    </tr>

                  <tr>
                    <td>E-mail:</td>
                    <td class="font-medium text-dark-medium"><?php echo $row['email'] ?></td>
                  </tr>
                  <tr>
                    <td>Admission ID:</td>
                    <td class="font-medium text-dark-medium"><?php echo $row['admissionid'] ?></td>
                  </tr>
                  <tr>
                    <td>Class:</td>
                    <td class="font-medium text-dark-medium"><?php echo $row['class'] ?></td>
                  </tr>
                  <tr>
                    <td>Section:</td>
                    <td class="font-medium text-dark-medium"><?php echo $row['section'] ?></td>
                  </tr>


                  <tr>
                    <td>Phone:</td>
                    <td class="font-medium text-dark-medium"><?php echo $row['phone'] ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Student Details Area End Here -->
  <?php require_once 'includes/footer.php'; ?>
