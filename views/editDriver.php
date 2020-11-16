<?php 
include('../public/connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM driver WHERE id = $id";
$row = mysqli_fetch_array(mysqli_query($conn,$sql)); 
?>
<!-- INCLUDING HEADER -->
<?php include('includes/header.php'); ?>
<!-- ---------------- -->
  <!-- INCLUDING NAVBAR -->
  <?php include('includes/navbar.php'); ?>
  <!-- ---------------- -->
    <div class="container-fluid">
      <div class="row">
        <!-- INCLUDING SIDEBAR -->
        <?php include('includes/sidebar.php'); ?>
        <!-- ---------------- -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 mb-5 px-md-4">
          <form action="../models/driver.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2>Edit Driver Information</h2>
            </div>
            <div class="form-card p-5 mb-3">
              <label>First Name <span>*</span> </label>
              <input
                type="text"
                name="first_name"
                value="<?php echo $row['first_name']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Last Name <span>*</span> </label>
              <input
                type="text"
                name="last_name"
                value="<?php echo $row['last_name']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Phone <span>*</span> </label>
              <input
                type="number"
                name="phone"
                value="<?php echo $row['phone']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label> Emergency Contact Number<span>*</span> </label>
              <input
                type="number"
                name="emergency_number"
                value="<?php echo $row['emergency_number']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Email </label>
              <input
                type="email"
                name="email"
                value="<?php echo $row['email']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>License Card<span>*</span> </label>
              <div class="custom-file">
                <input type="file" name="license_card" value="<?php echo $row['license_card']; ?>" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>

            <div class="form-card p-5 mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label> License Number<span>*</span> </label>
                  <input
                    type="text"
                    name="license_number"
                    value="<?php echo $row['license_number']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label> License Expiry Date<span>*</span> </label>
                  <input
                    type="date"
                    name="license_expiry_date"
                    value="<?php echo $row['licence_expiry_date']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
              </div>
            </div>
            <div class="form-card p-5 mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label>Driving Exprience in Year<span>*</span> </label>
                  <input
                    type="number"
                    name="driving_experience"
                    value="<?php echo $row['driving_experience']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Job Status</label><br />
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input
                        type="radio"
                        name="job_status"
                        value="<?php echo $row['']; ?>"
                        id="option1"
                        autocomplete="off"
                        checked
                        value="1"
                      />
                      ON
                    </label>
                    <label class="btn btn-secondary">
                      <input
                        type="radio"
                        name="job_status"
                        value="<?php echo $row[''] ?>"
                        id="option2"
                        autocomplete="off"
                        value="0"
                      />
                      OFF
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-card p-5 mb-3">
              <h6 class="mb-3">Temporary Address <span style="color: red;">*</span></h6>
              <div class="row">
                <div class="col-md-6">
                  <label>Street </label>
                  <input
                    type="text"
                    name="temp_street"
                    value="<?php echo $row['temp_street']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Village/City </label>
                  <input
                    type="text"
                    name="temp_city"
                    value="<?php echo $row['temp_city'] ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">Pincode </label>
                  <input
                    type="text"
                    name="temp_pincode"
                    value="<?php echo $row['temp_pincode']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">State </label>
                  <input
                    type="text"
                    name="temp_state"
                    value="<?php echo $row['temp_state']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
              </div>
            </div>

            <div class="form-card p-5 mb-3">
              <h6 class="mb-3">Permanent Address <span style="color: red;">*</span></h6>
              <div class="row">
                <div class="col-md-6">
                  <label>Street </label>
                  <input
                    type="text"
                    name="street"
                    value="<?php echo $row['street']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Village/City </label>
                  <input
                    type="text"
                    name="city"
                    value="<?php echo $row['city']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">Pincode </label>
                  <input
                    type="text"
                    name="pincode"
                    value="<?php echo $row['pincode']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">State </label>
                  <input
                    type="text"
                    name="state"
                    value="<?php echo $row['state']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
              </div>
            </div>
            <div class="row btn-box">
              <div class="col-md-6"></div>
              <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-danger read-more">Cancel</button>
                <button type="submit" name="submit" class="btn btn-success read-more ml-3">Sava</button>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>

<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- ---------------- -->
