<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form name="loginForm" action="/controllers/UserController.php?action=login" method="POST" onsubmit="return validateLoginForm()">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div class="error" id="emailError"></div>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
            
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
        <button onclick="window.history.back()">Go Back</button>
    </div>

    <script>
        function validateLoginForm() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');

            let valid = true;

        
            emailError.textContent = "";
            passwordError.textContent = "";

            
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                emailError.textContent = "Please enter a valid email address";
                valid = false;
            }

            
            if (password.trim() === "") {
                passwordError.textContent = "Password is required";
                valid = false;
            }

            return valid; 
        }
    </script>
</body>
</html>
