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
                                    <form class="row g-2 g-lg-3">
                                        <div class="col-md-12">
                                        <label for="inputCountry" class="form-label">Country</label>
                                        <select id="inputCountry" class="form-select">
                                            <option selected>Germany</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Portugal</option>
                                            <option>...</option>
                                        </select>
                                        </div>
                                        <div class="col-md-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                                        </div>
                                        <div class="col-md-8">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="City" value="Munich">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
                                        </div>
                                        <div class="col-md-12">
                                        <label for="inputStateProvince" class="form-label">State / Province</label>
                                        <input type="text" class="form-control" id="inputStateProvince"
                                            placeholder="State / Province">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inputCountryCode" class="form-label">Country Code</label>
                                        <input type="text" class="form-control" id="inputCountryCode" placeholder="Country Code">
                                        </div>
                                        <div class="col-md-8">
                                        <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
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