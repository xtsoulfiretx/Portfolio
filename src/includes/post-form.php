<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "contact-form") {
    //Add form fields
    $contactData["fname"] = trim(filter_input(INPUT_POST, "first-name-input", FILTER_SANITIZE_STRING));
    $contactData["lname"] = trim(filter_input(INPUT_POST, "last-name-input", FILTER_SANITIZE_STRING));
    $contactData["email"] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $contactData["subject"] = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS));
    $contactData["message"] = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

    // create enquiry and store return value
    $response = createEnquiry($contactData);
    // if createEnquiry returns an array, form is invalid
    if (is_array($response)) {
        $invalidContactFields = $response;
    // if createEnquiry returns true, form was submitted 
    } elseif ($response) {
        header("Location:index.php");
        exit;
    }
}