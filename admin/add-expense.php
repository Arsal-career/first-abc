<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Accounts</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Add New Expense</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Add Expense Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>Add New Expense</h3>
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
      <form class="new-added-form" action="save-expanse.php" method="POST">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Name </label>
            <input type="text" name="name" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>ID No </label>
            <input type="text" name="idno" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Expanse Type</label>
            <select class="select2" name="expansetype">
              <option >Please Select</option>
              <option >Salary</option>
              <option >Transport</option>
              <option >Maintanance</option>
              <option >Purchase</option>
              <option >Utilities</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Amount </label>
            <input type="text" name=amount placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>E-Mail Address</label>
            <input type="text" name="email" placeholder="" class="form-control">
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Status</label>
            <select class="select2" name="Status">
              <option >Please Select</option>
              <option >Paid</option>
              <option >Due</option>
              <option >Others</option>
            </select>
          </div>
          <div class="col-xl-3 col-lg-6 col-12 form-group">
            <label>Date</label>
            <input type="text" name="date" placeholder="dd/mm/yy" class="form-control air-datepicker" data-position="bottom right">
          </div>
          <div class="col-12 form-group mg-t-8">
            <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Add Expense Area End Here -->
<?php require_once 'includes/footer.php'; ?>
