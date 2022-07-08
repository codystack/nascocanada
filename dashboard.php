<?php
include './components/dashboardheader.php';
require_once './auth/account.php';

if (!isset($_SESSION['email'])) {
    header('location: login');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: login");
}
?>

    <div class="offcanvas-wrap">

        <section class="py-8" style="background: url('assets/images/bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">

                        <h3 class="mb-3">Welcome, <?php echo $_SESSION['firstName']; ?>!</h3>

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
                                                            <h4 class="card-title fw-light">APPLICATION</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                <a href="" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="assets/images/power.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">LOG OUT</h4>
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
                                                            <h4 class="card-title fw-light">ACCOUNT</h4>
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
                                                            <h4 class="card-title fw-light">LOG OUT</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="component-1-2" role="tabpanel" aria-labelledby="component-1-2-tab">
                                        <h5>Second tab content here ..</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime excepturi amet rem! Ab incidunt quod
                                        nobis nisi quas? Magnam laudantium eveniet nostrum quaerat corporis error saepe aperiam accusantium
                                        alias cumque?</p>
                                    </div>
                                    <div class="tab-pane fade" id="component-1-3" role="tabpanel" aria-labelledby="component-1-3-tab">
                                        <h5>Third tab content here ..</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime excepturi amet rem! Ab incidunt quod
                                        nobis nisi quas? Magnam laudantium eveniet nostrum quaerat corporis error saepe aperiam accusantium
                                        alias cumque?</p>
                                    </div>
                                    <div class="tab-pane fade" id="component-1-4" role="tabpanel" aria-labelledby="component-1-4-tab">
                                        <h5>Fourth tab content here ..</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime excepturi amet rem! Ab incidunt quod
                                        nobis nisi quas? Magnam laudantium eveniet nostrum quaerat corporis error saepe aperiam accusantium
                                        alias cumque?</p>
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