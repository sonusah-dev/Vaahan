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
          <form action="insertOwner.php" method="POST" enctype="multipart/form-data">
            <div class="form-card pl-5 mb-3" style="border: none; border-top: 8px solid purple;">
              <h2>Owner Information</h2>
            </div>
            <div class="form-card p-5 mb-3">
              <label>First Name <span>*</span> </label>
              <input
                type="text"
                name="first_name"
                class="form-control"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Last Name <span>*</span> </label>
              <input
                type="text"
                class="form-control"
                name="last_name"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Phone <span>*</span> </label>
              <input
                type="text"
                class="form-control"
                name="phone"
                aria-describedby="passwordHelpBlock"
              />
            </div>
            <div class="form-card p-5 mb-3">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                name="email"
                aria-describedby="passwordHelpBlock"
              />
            </div>

            <div class="form-card p-5 mb-3">
              <label>Id Proof<span>*</span> </label>
              <div class="custom-file">
                <input type="file" name="id_proof" class="custom-file-input" id="customFile" />
                <label class="custom-file-label" for="customFile">Choose file</label>
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
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Village/City </label>
                  <input
                    type="text"
                    name="temp_city"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">Pincode </label>
                  <input
                    type="text"
                    name="temp_pincode"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">State </label>
                  <input
                    type="text"
                    name="temp_state"
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
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label>Village/City </label>
                  <input
                    type="text"
                    name="city"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">Pincode </label>
                  <input
                    type="text"
                    name="pincode"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                <div class="col-md-6">
                  <label class="mt-2">State </label>
                  <input
                    type="text"
                    name="state"
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
                <button type="submit" name="submit" class="btn btn-success read-more ml-3">Add Owner</button>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>

<!-- INCLUDING FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- ---------------- -->
