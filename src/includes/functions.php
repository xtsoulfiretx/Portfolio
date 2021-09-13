<?php
//create an enquiry
function createEnquiry(array $contactData) {
  $enquiry = new ContactSubmission($contactData);
  
  $emptyInput = [];
  if ($enquiry->hasEmptyFields()) {
    $emptyInput = $enquiry->hasEmptyFields();
    return false;
  } else {
  return $enquiry->submitForm();
}
  
}