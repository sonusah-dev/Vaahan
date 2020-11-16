<?php
include('../public/connection.php');
$sql = "SELECT * FROM vehicle";
$foundResult = mysqli_query($conn,$sql);
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
                <th scope="col">Owner</th>
                <th scope="col">Vehicle No</th>
                <th scope="col">Chasis No</th>
                <th scope="col">Vehicle Model</th>
                <th scope="col">Type</th>
                <th scope="col">Engine Type</th>
                <th scope="col">Tyres</th>
                <th scope="col">Drivers</th>
                <th scope="col">Capacity</th>
                <th scope="col">Minimun</th>
                <th scope="col">Maximun</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = mysqli_fetch_array($foundResult)): ?>
              <tr>
                <td><?php echo $row['id'] ?></td>  
                <?php
                  $id = $row['owner_id'];
                  $query ="SELECT first_name,last_name FROM owner WHERE id = $id";
                  $found = mysqli_query($conn,$query);
                  $result = mysqli_fetch_array($found);
                ?> 
                <td><?php echo $result['first_name'].' '.$result['last_name']; ?></td>
                <td><?php echo $row['vehicle_number'] ?></td>
                <td><?php echo $row['chasis_number'] ?></td>
                <td><?php echo $row['vehicle_model'] ?></td>
                <td>
                  <?php
                    if($row['operational_type'] == 0) : echo 'Public';
                      else : echo 'Private';
                    endif
                  ?>
                </td>
                <td>
                  <?php
                    if($row['engine_type'] == 0) : echo 'TC';
                      else : echo 'Turbo';
                    endif
                  ?>
                </td>
                <td><?php echo $row['tyres'] ?></td>
                <td>
                  <?php
                    if($row['driver'] == 0) : echo 'YES';
                      else : echo 'NO';
                    endif 
                  ?>
                </td>
                <td><?php echo $row['vehicle_capacity'] ?></td>
                <td><?php echo $row['avg_load'] ?></td>
                <td><?php echo $row['max_load'] ?></td>
                
                <td class="d-flex justify-content-around">
                  <a href="editVehicle.php?id=<?php echo $row['id'] ?>" class="text-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="../models/delete/vehicle.php?id=<?php echo $row['id'] ?>" class="text-danger">
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
