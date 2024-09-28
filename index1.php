<?php
// Include the functions for database operations
require 'includes/contactfunctions.php';

// Fetch all contacts from the database
$rows = selectAll('contacts');

// Include the view file to display the list of contacts
include 'views/index1.view.php'; 
