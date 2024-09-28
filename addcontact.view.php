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
                     <!-- Navigation links -->
            <li><a href="/index1.php">List Contacts</a></li>
            <li><a href="/addcontact.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contact</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error; ?></p>
    <?php endif; ?>
    <form method="post">
          <!-- Form for adding a new contact -->
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Phone Number</label>
        <input type="text" name="phone" required>
           <!-- Submit button to send the form data -->
        <input type="submit">
    </form>
</main>
</body>
</html>
