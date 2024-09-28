<?php
require 'includes/contactfunctions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data from the POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // Validate form data
    if (!empty($name) && !empty($email) && !empty($phone)) {
        addContact($name, $email, $phone);
        header('Location: index1.php');
        exit;
    } else {
        $error = "All fields are required!";
    }
}

include 'views/addcontact.view.php';
