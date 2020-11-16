<?php
include('../public/connection.php');
$sql = "SELECT * FROM user";
$foundResult = mysqli_query($conn,$sql);
?>
<!-- INCLUDING HEADER -->
<?php include('includes/header.php') ?>
<!-- INCLUDING NAVBAR -->
<?php include('includes/navbar.php') ?>
<div class="container-fluid">
  <div class="row">
    <!-- INCLUDING SIDEBAR -->
    <?php include('include/sidebar.php')?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <table id="datatable" class="table table-striped table-border text-center my-5" style="background-color: white;">
        <thead style="background-color: rgb(170, 53, 170);" class="text-white">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td class="d-flex justify-content-around">
              <a href="edituser.php?id?id=<?php echo $row['id'] ?>" class="text-secondary">
                <i class="fa fa-edit"></i>
              </a>
              <a href="../models/delete/user.php?id=<?php echo $row['id'] ?>" class="text-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</div>
<!-- INCLUDING FOOTER -->
<?php include('include/footer.php')?>