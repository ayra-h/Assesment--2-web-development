<?php

function connectToDatabase() {
    // Creating a new PDO instance to connect to the 'contacts' database
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', 'its@rya456789');
    
    return $pdo;
}

// Fetches all contact records from the 'contacts' table
function selectAllContacts() {
    $pdo = connectToDatabase();

    $query = 'SELECT * FROM contacts';
    
    $statement = $pdo->query($query);
    
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

// Adds a new contact to the database
function addContact($name, $email, $phone) {
    
    $pdo = connectToDatabase();
    
    $pdo->query("INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')");
}

// Deletes a contact from the database by its ID
function deleteContact($id) {
    
    $pdo = connectToDatabase();
    
    $pdo->query("DELETE FROM contacts WHERE id = $id");
}



