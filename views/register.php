<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form name="registerForm" onsubmit="return validateForm()" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <div class="error" id="usernameError"></div>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div class="error" id="emailError"></div>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
            
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <div class="error" id="confirmPasswordError"></div>
            
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
        <button onclick="window.history.back()">Go Back</button>
    </div>

    <script>
        function validateForm() {
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let confirmPassword = document.getElementById('confirm-password').value;

            let usernameError = document.getElementById('usernameError');
            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');
            let confirmPasswordError = document.getElementById('confirmPasswordError');

            let valid = true;

            
            usernameError.textContent = "";
            emailError.textContent = "";
            passwordError.textContent = "";
            confirmPasswordError.textContent = "";

        
            if (username.trim() === "") {
                usernameError.textContent = "Username is required";
                valid = false;
            }

            
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                emailError.textContent = "Please enter a valid email address";
                valid = false;
            }

            
            if (password.length < 6) {
                passwordError.textContent = "Password must be at least 6 characters long";
                valid = false;
            }

            if (password !== confirmPassword) {
                confirmPasswordError.textContent = "Passwords do not match";
                valid = false;
            }

            return valid;
        }
    </script>
</body>
</html>
