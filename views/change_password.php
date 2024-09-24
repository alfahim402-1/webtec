<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Change Password</h2><br><br>
    <form action="/controllers/UserController.php?action=changePassword" method="POST"><br><br>
        <label for="old_password">Old Password:</label>
        <input type="password" id="old_password" name="old_password" required><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>

        <button type="submit">Change Password</button><br><br>
        <button class="back-button" onclick="window.history.back()">Go Back</button>
    </form>
    
</body>
</html>
