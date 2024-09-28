<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Management System</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contacts Management System</strong></li>
        </ul>
        <ul>
             <!-- Navigation bar with links to different pages -->
            <li><a href="/index1.php">List Contacts</a></li>
            <li><a href="/addcontact.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>My Contacts</h1>
    <!-- Table to display all the contacts -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
                 <!-- Loop through all contacts and display them in the table -->
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->email; ?></td>
                <td><?= $row->phone; ?></td>
                <!-- Link to delete a contact by its ID -->
                <td><a href="delete.php?id=<?= $row->id; ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
