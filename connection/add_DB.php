<?php
session_start();
include ("connection_db.php");

// ADD
if (isset ($_POST['addcase'])) {
    function sanitizeInput($input)
    {
        return htmlspecialchars(trim($input));
    }

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
    // $status              = sanitizeInput($_POST['status']);

    $stmt = $conn->prepare("INSERT INTO blotter (date, complainant_lname, complainant_fname, complainant_mname, complainant_address, complainant_contact, respondent_lname, respondent_fname, respondent_mname, respondent_address, respondent_contact, complaint) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssssssss', $date, $complainant_last, $complainant_first, $complainant_middle, $complainant_address, $complainant_contact, $respondent_last, $respondent_first, $respondent_middle, $respondent_address, $respondent_contact, $complaint);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: Unable to insert data. " . $stmt->error;
    }
} else {
    echo "Form not submitted.";
}



// Close connection
$stmt->close();
$conn->close();
?>