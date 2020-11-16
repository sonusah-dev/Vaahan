<?php
  include('../public/connection.php');
  $sql = "SELECT * FROM driver";
  $resultFound = mysqli_query($conn,$sql);
?>
<!-- INCLUDING HEADER -->
<?php include('includes/header.php'); ?>
<!-- ---------------- -->
  <!-- INCLUDING NAVBAR -->
  <?php include('includes/navbar.php'); ?>
  <!-- ------------------------------- -->
    <div class="container-fluid">
      <div class="row">
        <!-- INCLUDING SIDEBAR -->
        <?php include('includes/sidebar.php'); ?>
        <!-- ----------------- -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <table
            class="table table-striped table-hover text-center my-5"
            style="background-color: white;"
          >
            <thead style="background-color: rgb(170, 53, 170);" class="text-white">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Phone</th>
                <th scope="col">Urgent No</th>
                <th scope="col">Email</th>
                <th scope="col">License</th>
                <th scope="col">License No</th>
                <th scope="col">Expiry</th>
                <th scope="col">Experience</th>
                <th scope="col">JOB Status</th>
                <th scope="col">Street</th>
                <th scope="col">City</th>
                <th scope="col">Pincode</th>
                <th scope="col">State</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = mysqli_fetch_array($resultFound)): ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['emergency_number']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                  <img src="<?php echo $row['license_card']; ?>" alt="Docs" hieght="100" width="120">
                </td>
                <td><?php echo $row['license_number']; ?></td>
                <td><?php echo $row['license_expiry_date']; ?></td>
                <td><?php echo $row['driving_experience']; ?></td>
                <td>
                  <?php 
                    if($row['job_status'] == 0) : echo 'YES';
                      else : echo 'NO';
                    endif
                  ?>
                </td>
                <td><?php echo $row['street']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['pincode']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td class="d-flex justify-content-around">
                  <a href="editDriver.php?id=<?php echo $row['id'] ?>" class="text-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="../models/delete/driver.php?id=<?php echo $row['id'] ?>" class="text-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </main>
      </div>
    </div>

<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- ---------------- -->
