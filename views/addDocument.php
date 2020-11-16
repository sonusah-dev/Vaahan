<?php
include('../public/connection.php');
$sql = "SELECT * FROM vehicle";
$foundResult = mysqli_query($conn, $sql);
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
        <!-- ----------------- -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 mb-5 px-md-4">
          <form action="insertDocument.php" method="POST" enctype="multipart/form-data">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2>Document Information</h2>
            </div>
            <div class="form-card p-5 mb-3">
              <label for="vehicle_id">Vehicle Number<span>*</span></label>
              <select name="vehicle_id" class="custom-select is-valid">
                <option selected>Select Type</option>
                <?php while($row = mysqli_fetch_array($foundResult)): ?>
                <option value="<?php echo $row['id'];?>">
                <?php echo $row['vehicle_number'];?>
                </option>
                <?php endwhile ?>
              </select>
            </div>
            <div class="form-card p-5 mb-3">
              <label>Document Name <span>*</span> </label>
              <input
                type="text"
                name="doc_name"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>

            <div class="form-card p-5 mb-3">
              <label>Document File<span>*</span> </label>
              <div class="custom-file">
                <input type="file" name="doc_file" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>

            <div class="form-card p-5 mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label> Renew Date<span>*</span> </label>
                  <input
                    type="date"
                    name="renew_date"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Expiry Date<span>*</span> </label>
                  <input
                    type="date"
                    name="expiry_date"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
              </div>
            </div>
            <div class="form-card p-5 mb-3">
              <label>Access Portal Web </label>
              <input
                type="text"
                name="access_portal_web"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Access Portal Android </label>
              <input
                type="text"
                name="access_portal_android"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>User Name </label>
              <input
                type="text"
                name="username"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Password </label>
              <input
                type="text"
                name="password"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>

            <div class="row btn-box">
              <div class="col-md-6"></div>
              <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-danger read-more">Cancel</button>
                <button type="submit" name="submit" class="btn btn-success read-more ml-3">Save Document</button> 
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>

<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php'); ?>
