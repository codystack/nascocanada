<?php
include './components/header.php';
?>

    <section class="bg-black overflow-hidden vh-100">
        <div class="d-flex flex-column container level-3 min-vh-100">
            <div class="row align-items-center justify-content-center my-auto">
                <div class="col-md-10 col-lg-8 col-xl-5">
                    <div class="text-center">
                        <a href="./">
                            <img src="assets/images/logo/nac-logow.png" width="150" alt="Logo">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-header bg-white text-center pb-0">
                            <h5 class="fs-4">Register</h5>
                        </div>
                        <div class="card-body bg-white">
                            <form action="#">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="John">
                                            <label for="floatingInput">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Doe">
                                            <label for="floatingInput">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="roundupmedia">
                                    <label for="floatingInput">Company name</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-grid mb-2">
                                    <a href="" class="btn btn-lg btn-dark">Create Account</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-opaque-black inverted text-center">
                            <p class="text-secondary">Already have an account? <a href="login" class="underline">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="background background-overlay" style="background-image: url('https://i.imgur.com/ttUNFYO.jpg')"></figure>
    </section>


    <script src="https://cube.webuildthemes.com/assets/js/vendor.bundle.js"></script>
    <script src="https://cube.webuildthemes.com/assets/js/index.bundle.js"></script>
</body>

</html>