<?php  
include('../public/connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM vehicle WHERE id = $id";
$row = mysqli_fetch_array(mysqli_query($conn,$sql)); 
$query = "SELECT * FROM owner";
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
        <!-- INCLUDING NAVBAR -->
        <?php include('includes/sidebar.php'); ?>
        <!-- ---------------- -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 mb-5 px-md-4">
          <form action="../models/update/vehicle.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2><i class="fas fa-truck"></i>Edit Vehicle Information</h2>
            </div>

            <div class="form-card p-5 mb-3">
              <label for="vehicle_owner">Vehicle Owner</label>
              <select name="vehicle_owner" class="custom-select is-valid">
                <option selected>Select Type</option>
                <?php while($rows = mysqli_fetch_array($newResult)) : ?>
                <option value="<?php echo $rows['id']; ?>">
                <?php echo $rows['first_name'].' '.$rows['last_name']; ?>
                </option>
                <?php endwhile ?>
              </select>
            </div>
            <div class="form-card p-5 mb-3">
              <label>Vehicle Number <span>*</span> </label>
              <input
                type="text"
                name="vehicle_number"
                class="form-control"
                value="<?php echo $row['vehicle_number']; ?>"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Chasis Number <span>*</span> </label>
              <input
                type="text"
                name="chasis_number"
                value="<?php echo $row['chasis_number']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Vehicle Model <span>*</span> </label>
              <input
                type="text"
                name="vehicle_model"
                value="<?php echo $row['vehicle_model']; ?>"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label for="operational_type">Operational Type</label>
              <select name="operational_type" class="custom-select is-valid">
                <option selected>Select Type</option>
                <option value="0">Public</option>
                <option value="1">Private</option>
              </select>
            </div>
            <div class="form-card p-5 mb-3">
              <label for="engine_type">Engine Type</label>
              <select name="engine_type" class="custom-select is-valid">
                <option selected>Select Type</option>
                <option value="0">TC</option>
                <option value="1">TURBO</option>
              </select>
            </div>

            <div class="form-card p-5 mb-3">
              <div class="row">
                <div class="col-md-6">
                  <label>Number Of Tyres<span>*</span> </label>
                  <input
                    type="text"
                    name="tyres"
                    value="<?php echo $row['tyres']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Has Driver</label><br />
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="driver" id="option1" autocomplete="off" checked value="0" />
                      Yes
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="driver" id="option2" autocomplete="off" value="1" />
                      No
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-card p-5 mb-3">
              <div class="row">
                <div class="col-md-4">
                  <label>Vehicle Capacity in Tonns<span>*</span> </label>
                  <input
                    type="text"
                    name="vehicle_capacity"
                    value="<?php echo $row['vehicle_capacity']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-4">
                  <label>Average Load<span>*</span> </label>
                  <input
                    type="text"
                    name="average_load"
                    value="<?php echo $row['avg_load']; ?>"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-4">
                  <label>Maximum Load<span>*</span> </label>
                  <input
                    type="text"
                    name="maximum_load"
                    value="<?php echo $row['max_load']; ?>"
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
                <button type="submit" name="submit" class="btn btn-success read-more ml-3">Add Vehicle</button>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>

<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- ---------------- -->
