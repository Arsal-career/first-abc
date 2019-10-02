<?php require_once 'includes/header.php'; ?>

<?php
$query = "select * from teachers";
$select = mysqli_query($con, $query);

//    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
// }
?>

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Teacher</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>All Teachers</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Teacher Table Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>All Teachers Data</h3>
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
            <input type="text" placeholder="Search by ID ..." class="form-control">
          </div>
          <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by Name ..." class="form-control">
          </div>
          <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by Phone ..." class="form-control">
          </div>
          <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table display data-table text-nowrap">
          <thead>
            <tr>
              <th>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input checkAll">
                  <label class="form-check-label">ID No</label>
                </div>
              </th>
              <th>Photo</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>Class</th>
              <th>Date of Birth</th>
              <th>Section</th>
              <th>Address</th>
              <th>Phone</th>
              <th>E-mail</th>
              <th>Stauts</th>
            </tr>
          </thead>
          <?php
          while ($row = mysqli_fetch_assoc($select)) {
            ?>
          <tbody>
            <tr>
              <td>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label"><?php echo $row['idno'] ?></label>
                </div>
              </td>
              <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
              <td><?php echo $row['firstname'] ?></td>
              <td><?php echo $row['lastname'] ?></td>
              <td><?php echo $row['gender'] ?></td>
              <td><?php echo $row['class'] ?></td>
              <td><?php echo $row['dateofbirth'] ?></td>
              <td><?php echo $row['section'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td><?php echo $row['phone'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td>
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="flaticon-more-button-of-three-dots"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="t-update.php?idno=<?php echo $row['idno'] ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    <a class="dropdown-item" href="tdelete.php?idno=<?php echo $row['idno'] ?>"><i
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
<!-- Teacher Table Area End Here -->
<?php require_once 'includes/footer.php'; ?>
