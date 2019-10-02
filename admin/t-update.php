<?php  include "includes/db.inc.php"; ?>
<?php require_once 'includes/header.php'; ?>

<?php
$idno = $_GET['idno'];
$query = "select * from teachers where idno = '$idno'";
$select = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($select);
?>



<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
      <li>
        <a href="#">Home</a>
      </li>
      <li>Update From</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Admit Form Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>Update Students</h3>
        </div>

            </div>
            <form class="new-added-form" action="utd.php" method="POST">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>First Name </label>
                  <input type="text" name="firstname" placeholder=""  required=""  value="<?php echo $row['firstname']; ?>" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>Last Name </label>
                  <input type="text" name="lastname" placeholder="" required="" value="<?php echo $row['lastname']; ?>" class="form-control">
                </div>

								<div class="col-xl-3 col-lg-6 col-12 form-group">
									<label>Gender </label>
									<input type="text" name="gender" placeholder="" required="" value="<?php echo $row['gender']; ?>" class="form-control">
								</div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>Date Of Birth </label>
                  <input type="text" name="dateofbirth" required="" data-date-format="yyyy-mm-dd" placeholder="dd/mm/yyyy"  value="<?php echo $row['dateofbirth']; ?>"  class="form-control air-datepicker"
                  data-position='bottom right'>
                  <i class="far fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>Id No</label>
                  <input  name="idno"  value="<?php echo $row['idno']; ?>"  required="" placeholder="" class="form-control">
                </div>

						      <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>E-Mail</label>
                  <input type="email" name="email"  required="" placeholder=""  value="<?php echo $row['email']; ?>" class="form-control">
                </div>

								<div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>Class </label>
                  <input type="text" name="class" placeholder="" required=""  value="<?php echo $row['class']; ?>" class="form-control">
                </div>
								<div class="col-xl-3 col-lg-6 col-12 form-group">
									<label>Section </label>
									<input type="text" name="section" placeholder="" required=""  value="<?php echo $row['section']; ?>" class="form-control">
								</div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>address</label>
                  <input type="text" name="address" required="" placeholder="" value="<?php echo $row['address'];?>" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                  <label>Phone</label>
                  <input  name="phone" placeholder="" required=""  value="<?php echo $row['phone'];?>" class="form-control">
                </div>
                <div class="col-lg-6 col-12 form-group">
                  <label>Short BIO</label>
                  <textarea class="textarea form-control" name="shortbio"  required=""  value="<?php echo $row['shortbio']; ?>" cols="10" rows="9"></textarea>
                </div>
                <div class="col-lg-6 col-12 form-group mg-t-30">
                  <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                  <input type="file" name="pic"  value="<?php echo $row['pic']; ?>"   class="form-control-file">
                </div>
                <div class="col-12 form-group mg-t-8">
                  <button type="submit" name="submit" value="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button/>

                </div>
              </div>
            </form>
          </div>
        </div>


        <!-- Admit Form Area End Here -->
      <?php require_once 'includes/footer.php'; ?>
