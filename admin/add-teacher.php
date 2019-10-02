<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Teacher</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Add New Teacher</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Add New Teacher Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>Add New Teacher</h3>
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
      <form class="new-added-form0" action="save-tadmission.php" method="POST">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>First Name </label>
            <input type="text" name="firstname" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Last Name </label>
            <input type="text" name="lastname" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Gender </label>
            <select class="select2"name="gender">
              <option  >Please Select Gender </option>
              <option >Male</option>
              <option >Female</option>
              <option >Others</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Date Of Birth </label>
            <input type="text" name="dateofbirth" required="" data-date-format="yyyy-mm-dd" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
            data-position='bottom right'>
            <i class="far fa-calendar-alt"></i>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>ID No</label>
            <input type="text" name="idno" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Blood Group </label>
            <select class="select2" name="bloodgroup">
              <option >Please Select Group </option>
              <option >A+</option>
              <option >A-</option>
              <option >B+</option>
              <option >B-</option>
              <option >O+</option>
              <option >O-</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Religion </label>
            <select class="select2" name="religion">
              <option>Please Select Religion </option>
              <option >Islam</option>
              <option >Hindu</option>
              <option >Christian</option>
              <option >Buddish</option>
              <option >Others</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>E-Mail</label>
            <input type="email" name="email" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Password</label>
            <input type="pass" name="pass" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Class </label>
            <select class="select2" name="class">
              <option >Please Select Class</option>
              <option >Play</option>
              <option >Nursery</option>
              <option >One</option>
              <option >Two</option>
              <option >Three</option>
              <option >Four</option>
              <option >Five</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Section </label>
            <select class="select2" name="section">
              <option >Please Select Section </option>
              <option >Pink</option>
              <option >Blue</option>
              <option >Bird</option>
              <option >Rose</option>
              <option >Red</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Phone</label>
            <input type="text"  name="phone" placeholder="" class="form-control">
          </div>
          <div class="col-xl-6 col-lg-6 col-12 form-group">
            <label>Address</label>
            <textarea class="textarea form-control" name="address"  cols="10" rows="9"></textarea>
          </div>

          <div class="col-lg-6 col-12 form-group">
            <label>Short BIO</label>
            <textarea class="textarea form-control" name="shortbio" cols="10" rows="9"></textarea>
          </div>
          <div class="col-lg-6 col-12 form-group mg-t-30">
            <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
            <input type="file" class="form-control-file" name="pic">
          </div>
          <div class="col-12 form-group mg-t-8">
            <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Add New Teacher Area End Here -->
<?php require_once 'includes/footer.php'; ?>
