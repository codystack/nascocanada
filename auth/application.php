<?php
session_start();
// Connect database
include "./config/db.php";

// Business script
if (isset($_POST['business_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $titleHeld = $conn->real_escape_string($_POST['titleHeld']);
    $companyAddress = $conn->real_escape_string($_POST['companyAddress']);
    $telephone = $conn->real_escape_string($_POST['telephone']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $fax = $conn->real_escape_string($_POST['fax']);
    $companyPrincipalBusiness = $conn->real_escape_string($_POST['companyPrincipalBusiness']);
    $yearsInBusiness = $conn->real_escape_string($_POST['yearsInBusiness']);
    $typeOfCompany = $conn->real_escape_string($_POST['typeOfCompany']);
    $ownershipStructure = $conn->real_escape_string($_POST['ownershipStructure']);
    $numberOfYearsInBusiness = $conn->real_escape_string($_POST['numberOfYearsInBusiness']);
    $companySize = $conn->real_escape_string($_POST['companySize']);
    $stockExchange = $conn->real_escape_string($_POST['stockExchange']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_form_query = "SELECT * FROM business WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_form_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<meta http-equiv='refresh' content='5; URL=application'>";
    }else {
        // Finally, insert business informations if there are no errors in the form
        $query = "INSERT INTO business (userID, companyName, titleHeld, companyAddress, telephone, mobile, fax, companyPrincipalBusiness, yearsInBusiness, typeOfCompany, ownershipStructure, numberOfYearsInBusiness, companySize, stockExchange, status) 
  			        VALUES('$userID', '$companyName', '$titleHeld', '$companyAddress', '$telephone', '$mobile', '$fax', '$companyPrincipalBusiness', '$yearsInBusiness', '$typeOfCompany', '$ownershipStructure', '$numberOfYearsInBusiness', '$companySize', '$stockExchange', 'Filled')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "Business Infromation Completed!";
            echo "<meta http-equiv='refresh' content='3; URL=application'>";
        }else {
            $_SESSION['error_message'] = "Error processing application".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=application'>";
        }
    }
}



// Shareholder script
if (isset($_POST['shareholder_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $shareholderOne = $conn->real_escape_string($_POST['shareholderOne']);
    $shareholderOnePercentage = $conn->real_escape_string($_POST['shareholderOnePercentage']);
    $shareholderTwo = $conn->real_escape_string($_POST['shareholderTwo']);
    $shareholderTwoPercentage = $conn->real_escape_string($_POST['shareholderTwoPercentage']);
    $shareholderThree = $conn->real_escape_string($_POST['shareholderThree']);
    $shareholderThreePercentage = $conn->real_escape_string($_POST['shareholderThreePercentage']);
    $shareholderFour = $conn->real_escape_string($_POST['shareholderFour']);
    $shareholderFourPercentage = $conn->real_escape_string($_POST['shareholderFourPercentage']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_form_query = "SELECT * FROM shareholders WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_form_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<meta http-equiv='refresh' content='5; URL=application-shareholders'>";
    }else {
        // Finally, insert shareholders informations if there are no errors in the form
        $query = "INSERT INTO shareholders (userID, shareholderOne, shareholderOnePercentage, shareholderTwo, shareholderTwoPercentage, shareholderThree, shareholderThreePercentage, shareholderFour, shareholderFourPercentage, status) 
  			        VALUES('$userID', '$shareholderOne', '$shareholderOnePercentage', '$shareholderTwo', '$shareholderTwoPercentage', '$shareholderThree', '$shareholderThreePercentage', '$shareholderFour', '$shareholderFourPercentage', 'Filled')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "Shareholders Infromation Completed!";
            echo "<meta http-equiv='refresh' content='3; URL=application-shareholders'>";
        }else {
            $_SESSION['error_message'] = "Error processing application".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=application-shareholders'>";
        }
    }
}


// Directors script
if (isset($_POST['directors_profile_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $directorOne = $conn->real_escape_string($_POST['directorOne']);
    $directorOneProfessionalQualification = $conn->real_escape_string($_POST['directorOneProfessionalQualification']);
    $directorOneCountryOfOrigin = $conn->real_escape_string($_POST['directorOneCountryOfOrigin']);
    $directorOneYearOfExperience = $conn->real_escape_string($_POST['directorOneYearOfExperience']);
    $directorTwo = $conn->real_escape_string($_POST['directorTwo']);
    $directorTwoProfessionalQualification = $conn->real_escape_string($_POST['directorTwoProfessionalQualification']);
    $directorTwoCountryOfOrigin = $conn->real_escape_string($_POST['directorTwoCountryOfOrigin']);
    $directorTwoYearOfExperience = $conn->real_escape_string($_POST['directorTwoYearOfExperience']);
    $directorThree = $conn->real_escape_string($_POST['directorThree']);
    $directorThreeProfessionalQualification = $conn->real_escape_string($_POST['directorThreeProfessionalQualification']);
    $directorThreeCountryOfOrigin = $conn->real_escape_string($_POST['directorThreeCountryOfOrigin']);
    $directorThreeYearOfExperience = $conn->real_escape_string($_POST['directorThreeYearOfExperience']);
    $directorFour = $conn->real_escape_string($_POST['directorFour']);
    $directorFourProfessionalQualification = $conn->real_escape_string($_POST['directorFourProfessionalQualification']);
    $directorFourCountryOfOrigin = $conn->real_escape_string($_POST['directorFourCountryOfOrigin']);
    $directorFourYearOfExperience = $conn->real_escape_string($_POST['directorFourYearOfExperience']);
    $directorFive = $conn->real_escape_string($_POST['directorFive']);
    $directorFiveProfessionalQualification = $conn->real_escape_string($_POST['directorFiveProfessionalQualification']);
    $directorFiveCountryOfOrigin = $conn->real_escape_string($_POST['directorFiveCountryOfOrigin']);
    $directorFiveYearOfExperience = $conn->real_escape_string($_POST['directorFiveYearOfExperience']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_form_query = "SELECT * FROM directors WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_form_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<meta http-equiv='refresh' content='5; URL=application-directors-profile'>";
    }else {
        // Finally, insert shareholders informations if there are no errors in the form
        $query = "INSERT INTO directors (userID, directorOne, directorOneProfessionalQualification, directorOneCountryOfOrigin, directorOneYearOfExperience, directorTwo, directorTwoProfessionalQualification, directorTwoCountryOfOrigin, directorTwoYearOfExperience, directorThree, directorThreeProfessionalQualification, directorThreeCountryOfOrigin, directorThreeYearOfExperience, directorFour, directorFourProfessionalQualification, directorFourCountryOfOrigin, directorFourYearOfExperience, directorFive, directorFiveProfessionalQualification, directorFiveCountryOfOrigin, directorFiveYearOfExperience, status) 
  			        VALUES('$userID', '$directorOne', '$directorOneProfessionalQualification', '$directorOneCountryOfOrigin', '$directorOneYearOfExperience','$directorTwo', '$directorTwoProfessionalQualification', '$directorTwoCountryOfOrigin', '$directorTwoYearOfExperience','$directorThree', '$directorThreeProfessionalQualification', '$directorThreeCountryOfOrigin', '$directorThreeYearOfExperience','$directorFour', '$directorFourProfessionalQualification', '$directorFourCountryOfOrigin', '$directorFourYearOfExperience','$directorFive', '$directorFiveProfessionalQualification', '$directorFiveCountryOfOrigin', '$directorFiveYearOfExperience', 'Filled')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "Shareholders Infromation Completed!";
            echo "<meta http-equiv='refresh' content='3; URL=application-directors-profile'>";
        }else {
            $_SESSION['error_message'] = "Error processing application".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=application-directors-profile'>";
        }
    }
}



// Management script
if (isset($_POST['management_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $firstNameDesignation = $conn->real_escape_string($_POST['firstNameDesignation']);
    $secondName = $conn->real_escape_string($_POST['secondName']);
    $secondNameDesignation = $conn->real_escape_string($_POST['secondNameDesignation']);
    $thirdName = $conn->real_escape_string($_POST['thirdName']);
    $thirdNameDesignation = $conn->real_escape_string($_POST['thirdNameDesignation']);
    $fourthName = $conn->real_escape_string($_POST['fourthName']);
    $fourthNameDesignation = $conn->real_escape_string($_POST['fourthNameDesignation']);
    $fifthName = $conn->real_escape_string($_POST['fifthName']);
    $fifthNameDesignation = $conn->real_escape_string($_POST['fifthNameDesignation']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_form_query = "SELECT * FROM management WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_form_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<meta http-equiv='refresh' content='5; URL=application-management'>";
    }else {
        // Finally, insert shareholders informations if there are no errors in the form
        $query = "INSERT INTO management (userID, firstName, firstNameDesignation, secondName, secondNameDesignation, thirdName, thirdNameDesignation, fourthName, fourthNameDesignation, fifthName, fifthNameDesignation, status) 
  			        VALUES('$userID', '$firstName', '$firstNameDesignation', '$secondName', '$secondNameDesignation', '$thirdName', '$thirdNameDesignation', '$fourthName', '$fourthNameDesignation', '$fifthName', '$fifthNameDesignation', 'Filled')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "Shareholders Infromation Completed!";
            echo "<meta http-equiv='refresh' content='3; URL=application-management'>";
        }else {
            $_SESSION['error_message'] = "Error processing application".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=application-management'>";
        }
    }
}


// Finance script
if (isset($_POST['finance_btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $companyAuditor = $conn->real_escape_string($_POST['companyAuditor']);
    $auditorPhone = $conn->real_escape_string($_POST['auditorPhone']);
    $auditorAddress = $conn->real_escape_string($_POST['auditorAddress']);
    $firstFinanciersName = $conn->real_escape_string($_POST['firstFinanciersName']);
    $firstFinanciersAddress = $conn->real_escape_string($_POST['firstFinanciersAddress']);
    $firstFinanciersBankCntact = $conn->real_escape_string($_POST['firstFinanciersBankCntact']);
    $firstFinanciersPhone = $conn->real_escape_string($_POST['firstFinanciersPhone']);
    $secondFinanciersName = $conn->real_escape_string($_POST['secondFinanciersName']);
    $secondFinanciersAddress = $conn->real_escape_string($_POST['secondFinanciersAddress']);
    $secondFinanciersBankContact = $conn->real_escape_string($_POST['secondFinanciersBankContact']);
    $secondFinanciersPhone = $conn->real_escape_string($_POST['secondFinanciersPhone']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_form_query = "SELECT * FROM finance WHERE userID='".$_SESSION['id']."'";
    $result = mysqli_query($conn, $check_form_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<meta http-equiv='refresh' content='5; URL=application-finance'>";
    }else {
        // Finally, insert shareholders informations if there are no errors in the form
        $query = "INSERT INTO finance (userID, companyAuditor, auditorPhone, auditorAddress, firstFinanciersName, firstFinanciersAddress, firstFinanciersBankCntact, firstFinanciersPhone, secondFinanciersName, secondFinanciersAddress, secondFinanciersBankContact, secondFinanciersPhone, status) 
  			        VALUES('$userID', '$companyAuditor', '$auditorPhone', '$auditorAddress', '$firstFinanciersName', '$firstFinanciersAddress', '$firstFinanciersBankCntact', '$firstFinanciersPhone', '$secondFinanciersName', '$secondFinanciersAddress', '$secondFinanciersBankContact', '$secondFinanciersPhone', 'Filled')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "Shareholders Infromation Completed!";
            echo "<meta http-equiv='refresh' content='3; URL=application-finance'>";
        }else {
            $_SESSION['error_message'] = "Error processing application".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='5; URL=application-finance'>";
        }
    }
}