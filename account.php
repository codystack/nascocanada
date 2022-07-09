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

                                            <?php

                                                $select_query = "SELECT * FROM users WHERE id ='".$_SESSION['id']."'";
                                                $result = mysqli_query($conn, $select_query);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        $id = $row['id'];
                                                        $firstName = $row['firstName'];
                                                        $lastName = $row['lastName'];
                                                        $companyName = $row['companyName'];
                                                        $phone = $row['phone'];
                                                        $email = $row['email'];
                                                        $userID = $row['userID'];

                                            ?>

                                            <form class="row g-2 g-lg-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" 
                                                        value="<?php echo $firstName; if ($firstName == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputZip" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name"
                                                    value="<?php echo $lastName; if ($lastName == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="inputAddress" class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" name="companyName" placeholder="Company Name"
                                                    value="<?php echo $companyName; if ($companyName == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Phone" 
                                                    value="<?php echo $email; if ($email == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputZip" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                                    value="<?php echo $phone; if ($phone == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputCountryCode" class="form-label">Security Code</label>
                                                    <input type="text" class="form-control" name="userID" disabled placeholder="Security Code"
                                                    value="<?php echo $userID; if ($userID == null) {
                                                        echo "Not Available";} 
                                                        ?> ">
                                                </div>

                                                <div class="col-md-8">
                                                    <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <button name="" type="submit" class="btn btn-lg btn-dark">Update Profile</button>
                                                </div>
                                            </form>
                                            <?php 
                                            }
                                                }
                                            ?>
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