<?php 
include('../public/connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM document WHERE id = $id";
$row = mysqli_fetch_array(mysqli_query($conn,$sql)); 
$query = "SELECT * FROM vehicle";
$newResult = mysqli_query($conn, $query);
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
          <form action="../models/document.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2>Edit Document Information</h2>
            </div>
            <div class="form-card p-5 mb-3">
              <label for="vehicle_id">Vehicle Number<span>*</span></label>
              <select name="vehicle_id" class="custom-select is-valid">
                <option selected>Select Type</option>
                <?php while($rows = mysqli_fetch_array($newResult)): ?>
                <option value="<?php echo $rows['id'];?>">
                <?php echo $rows['vehicle_number'];?>
                </option>
                <?php endwhile ?>
              </select>
            </div>
            <div class="form-card p-5 mb-3">
              <label>Document Name <span>*</span> </label>
              <input
                type="text"
                name="doc_name"
                value="<?php echo $row['name']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>

            <div class="form-card p-5 mb-3">
              <label>Document File<span>*</span> </label>
              <div class="custom-file">
                <input type="file" name="doc_file" value="<?php echo $row['document'];?>" class="custom-file-input" id="customFile" />
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
                    value="<?php echo $row['renew_date']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Expiry Date<span>*</span> </label>
                  <input
                    type="date"
                    name="expiry_date"
                    value="<?php echo $row['expiry_date']; ?>"
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
                value="<?php echo $row['web_portal']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Access Portal Android </label>
              <input
                type="text"
                name="access_portal_android"
                value="<?php echo $row['android_portal']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>User Name </label>
              <input
                type="text"
                name="username"
                value="<?php echo $row['username']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Password </label>
              <input
                type="text"
                name="password"
                value="<?php echo $row['password']; ?>"
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
<!-- ---------------- -->
