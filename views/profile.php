<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/home.css"> 
</head>
<body>
    <h2>Profile</h2>
    <form action="/controllers/UserController.php?action=updateProfile" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $user['name'] ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required>

        <button type="submit">Update Profile</button>
    </form>
    <button class="back-button" onclick="window.history.back()">Go Back</button>
</body>
</html>
