<?php
  include('../public/connection.php');
  $sql = "SELECT * FROM document";
  $resultFound = mysqli_query($conn,$sql);
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
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <table
            class="table table-striped table-hover text-center my-5"
            style="background-color: white;"
          >
            <thead style="background-color: rgb(170, 53, 170);" class="text-white">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Vehicle</th>
                <th scope="col">Name</th>
                <th scope="col">Document</th>
                <th scope="col">Renew Date</th>
                <th scope="col">Expiry Date</th>
                <th scope="col">Web Portal</th>
                <th scope="col">Android Portal</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php  while ($row = mysqli_fetch_array($resultFound)):?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <?php
                  $vehicle_id = $row['vehicle_id'];
                  $query ="SELECT vehicle_number FROM vehicle WHERE id = $vehicle_id";
                  $found = mysqli_query($conn,$query);
                  $result = mysqli_fetch_array($found);
                ?> 
                <td><?php echo $result['vehicle_number']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                  <img src="<?php echo $row['document'];?>" alt="docs" hieght="100" width="120">
                </td>
                <td><?php echo $row['renew_date']; ?></td>
                <td><?php echo $row['expiry_date']; ?></td>
                <td><?php echo $row['web_portal']; ?></td>
                <td><?php echo $row['android_portal']; ?></td>
                <td><?php echo $row['username']; ?></td>

                <td class="d-flex justify-content-around">
                  <a href="editDocument.php?id=<?php echo $row['id']?>" class="text-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="../models/delete/document.php?id=<?php echo $row['id'] ?>" class="text-danger"
                    ><i class="far fa-trash-alt"></i>
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
