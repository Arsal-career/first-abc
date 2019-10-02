<?php require_once 'includes/header.php'; ?>
<?php
$query = "select * from students";
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
      <li>All Students</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Student Table Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>All Students Data</h3>
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-expanded="false">...</a>

          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i
              class="fas fa-times text-orange-red"></i>Close</a>
              <a class="dropdown-item" href="#"><i
                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                <a class="dropdown-item" href="#"><i
                  class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
              </div>
            </div>
            <form class="mg-b-20">
              <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Roll ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Class ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                  <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>

              </form>
              <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                  <thead>
                    <tr>
                      <th>Check</th>

                      <th>Roll</th>
                      <th>Pic</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Father Name </th>
                      <th>Mother Name</th>
                      <th>Gender</th>
                      <th>Date oF Birth</th>
                      <th>Blood Group</th>
                      <th>Religion</th>
                      <th>E-mail</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Admissionid</th>
                      <th>Phone</th>
                      <th>Short Bio</th>
                      <th>Stats</th>



                    </tr>
                  </thead>
                  <?php

                  while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                    <tbody>

                      <!-- <tr>
                      <td>
                      <div class="form-check">
                      <input type="checkbox" class="form-check-input">
                      <label class="form-check-label"><td></td></label>
                    </div>
                  </td>
                  <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                </tr> -->

                <tr>
                  <td> <input type="checkbox"> </td>

                  <td><?php echo $row['roll'] ?></td>
                  <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                  <td><?php echo $row['firstname'] ?></td>
                  <td><?php echo $row['lastname'] ?></td>
                  <td><?php echo $row['fathername'] ?></td>
                  <td><?php echo $row['mothername'] ?></td>
                  <td><?php echo $row['gender'] ?></td>
                  <td><?php echo $row['dateofbirth'] ?></td>
                  <td><?php echo $row['bloodgroup'] ?></td>
                  <td><?php echo $row['religion'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['class'] ?></td>
                  <td><?php echo $row['section'] ?></td>
                  <td><?php echo $row['admissionid'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['shortbio'] ?></td>
                  <td>
                    <div class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      aria-expanded="false">
                      <span class="flaticon-more-button-of-three-dots"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#"><i
                        class="fas fa-times text-orange-red"></i>Close</a>

                        <a class="dropdown-item" href="update.php?roll=<?php echo $row['roll'] ?>"><i
                          class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>

                          <a class="dropdown-item" href="all-student.php"><i
                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>

                            <a class="dropdown-item" href="delete.php?roll=<?php echo $row['roll'] ?>"><i
                              class="fa fa-trash text-red-peel"></i>Delete</a>

                            </div>
                          </div>
                        </td>



                      </tr>

                      <?php
                    }

                    ?>




                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php require_once 'includes/footer.php'; ?>
