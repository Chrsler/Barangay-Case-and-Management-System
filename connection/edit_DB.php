<?php

session_start();
include ("connection_db.php");

// EDIT
if (isset ($_POST['editCase'])) {
    // Check if the required fields are set
    // if (isset ($_POST['date'], 
    //         $_POST['complainant_last'], 
    //         $_POST['complainant_first'], 
    //         $_POST['complainant_middle'], 
    //         $_POST['complainant_address'], 
    //         $_POST['complainant_contact'], 
    //         $_POST['respondent_last'], 
    //         $_POST['respondent_first'], 
    //         $_POST['respondent_middle'], 
    //         $_POST['respondent_address'], 
    //         $_POST['respondent_contact'], 
    //         $_POST['complaint'])) {

    // Assuming $conn is your database connection
    // Function to sanitize inputs
    function sanitizeInput($input)
    {
        return htmlspecialchars(trim($input));
    }

    // Sanitize inputs
    $date                = sanitizeInput($_POST['date']);
    $complainant_last    = sanitizeInput($_POST['complainant_last']);
    $complainant_first   = sanitizeInput($_POST['complainant_first']);
    $complainant_middle  = sanitizeInput($_POST['complainant_middle']);
    $complainant_address = sanitizeInput($_POST['complainant_address']);
    $complainant_contact = sanitizeInput($_POST['complainant_contact']);
    $respondent_last     = sanitizeInput($_POST['respondent_last']);
    $respondent_first    = sanitizeInput($_POST['respondent_first']);
    $respondent_middle   = sanitizeInput($_POST['respondent_middle']);
    $respondent_address  = sanitizeInput($_POST['respondent_address']);
    $respondent_contact  = sanitizeInput($_POST['respondent_contact']);
    $complaint           = sanitizeInput($_POST['complaint']);

    // Prepare and execute the statement
    $stmt = $conn->prepare("UPDATE `blotter` SET `complainant_fname`=?, `complainant_lname`=?, `complainant_mname`=?, `complainant_address`=?, `complainant_contact`=?, `respondent_fname`=?, `respondent_lname`=?, `respondent_mname`=?, `respondent_address`=?, `respondent_contact`=?, `complaint`=?, `date`=? WHERE `blotter_id` = ?");
    $stmt->bind_param('ssssssssssssi', $complainant_first, $complainant_last, $complainant_middle, $complainant_address, $complainant_contact, $respondent_first, $respondent_last, $respondent_middle, $respondent_address, $respondent_contact, $complaint, $date, $_POST['blotter_id']);

    // Execute the statement and handle errors
    if ($stmt->execute()) {
        echo "Data updated successfully.";
    } else {
        echo "Error: Unable to update data. " . $stmt->error;
    }
} else {
    echo "All required fields are not filled.";
}

?>