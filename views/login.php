<!-- INCLUDING HEADER -->
<?php include('includes/header.php')?>
  <!-- INCLUDING NAVBAR -->
  <?php include('includes/navbar.php') ?>
    <div class="container-fluid">
      <div class="row">
        <!-- INCLUDING SIDEBAR -->
        <?php include('includes/sidebar.php') ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 mb-5 px-md-4">
          <form action="../models/loginvalidate.php" method="POST">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2>Register</h2>
            </div>
            <div class="form-card p-5 mb-3">
              <label>Username</label>
              <input
                type="text"
                class="form-control"
                name="username"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="row btn-box">
              <div class="col-md-12 d-flex justify-content-center">
                <button type="button" class="btn btn-danger read-more">Sign Up</button>
                <button type="submit" name="submit" class="btn btn-success read-more ml-3">Login</button>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>
<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php') ?>