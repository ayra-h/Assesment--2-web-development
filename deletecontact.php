<?php
require 'includes/contactfunctions.php';

if (isset($_GET['id'])) {
    
    // Get the 'id' of the contact to delete
    $id = $_GET['id'];
    deleteContact($id);

    // Redirect back to the main contact list page after the contact is deleted
    header('Location: index1.php');
    exit;
}
