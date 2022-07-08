<?php
include './components/dashboardheader.php';

?>

    <div class="offcanvas-wrap">

        <section class="py-8" style="background: url('assets/images/bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">

                        <h3 class="mb-3">Welcome, <?php echo $_SESSION['firstName']; ?>!</h3>

                        <section>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card bg-opaque-white">
                                        <div class="card-body bg-white">
                                            <h3 class="fs-6">Profile</h3>
                                            <hr>
                                            <?php
                                                if (isset($_SESSION['error_message'])) {
                                                    ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php
                                                            echo $_SESSION['error_message'];
                                                            session_destroy();
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['error_message']);
                                                }
                                            ?>
                                            <?php
                                                if (isset($_SESSION['success_message'])) {
                                                    ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php echo $_SESSION['success_message']; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['success_message']);
                                                }
                                            ?>
                                            <form class="row g-2 g-lg-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" name="firstName" placeholder="City" value="Munich">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputZip" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" name="lastName" placeholder="Zip Code">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="inputAddress" class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" name="companyName" placeholder="Address">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="City" value="Munich">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputZip" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Zip Code">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputCountryCode" class="form-label">Security Code</label>
                                                    <input type="text" class="form-control" name="userID" placeholder="Country Code">
                                                </div>

                                                <div class="col-md-8">
                                                    <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <button name="" type="submit" class="btn btn-lg btn-dark">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>

    </div>


  <script src="https://cube.webuildthemes.com/assets/js/vendor.bundle.js"></script>
  <script src="https://cube.webuildthemes.com/assets/js/index.bundle.js"></script>

</body>

</html>