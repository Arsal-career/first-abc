<?php require_once "includes/header.php"; ?>

<?php require_once 'includes/header.php'; ?>

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Main Page</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li> Form</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Admit Form Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>M Page</h3>
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
            <form class="new-added-form" action="save-admission.php" method="POST">
              <div class="row">
                <div class="col-lg-6 col-12 form-group">
                  <label>Welcome Page </label>
                  <input type="text" name="" placeholder=""  required="" class="form-control">
                </div>

                <div class="col-lg-6 col-12 form-group">
                  <label>Knowledge is power </label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Senior High School </label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>College of Arts & Sciences </label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Unmatched Proffessor</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Education is Life</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Popular Courses</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Teacher</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Blog</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Create cool websites</label>
                  <input type="text" name="" placeholder="" required="" class="form-control">
                </div>
                <div class="col-12 form-group mg-t-8">
                  <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                  <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Admit Form Area End Here -->
        <?php require_once 'includes/footer.php'; ?>



        <?php require_once "includes/footer.php"; ?>
