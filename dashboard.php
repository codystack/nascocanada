<?php
include './components/dashboardheader.php';
require_once './auth/account.php';
?>

    <div class="offcanvas-wrap">

        <section class="py-8" style="background: url('assets/images/bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">

                        <h4 class="mb-3">Welcome, <?php echo $_SESSION['firstName']; ?>!</h4>

                        <section>
                            <div class="col-xl-12">
                                <div class="tab-content" id="component-1-content">
                                    <div class="tab-pane fade show active" id="component-1-1" role="tabpanel"
                                        aria-labelledby="component-1-1-tab">
                                        <div class="row g-3 g-xl-5">
                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                <a href="application" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="assets/images/apply.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Application</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                <a href="account" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="assets/images/user.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Account</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                <a href="security" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="assets/images/security.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Security</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                <a href="logout" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="assets/images/power.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Log Out</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
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