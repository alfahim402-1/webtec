function validateLoginForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (email == "" || password == "") {
        alert("Email and Password must be filled out");
        return false;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login_endpoint.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;

            if (response === "success") {
                alert("Login successful");
                window.location.href = "dashboard.php";
            } else {
                alert("Login failed: " + response);
            }
        }
    };

    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
    return false; 
} 

function validateRegisterForm() {
    var email = document.forms["registerForm"]["email"].value;
    var password = document.forms["registerForm"]["password"].value;

    if (email == "" || password == "" || password.length < 6) {
        alert("Email must be valid and password at least 6 characters long");
        return false;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "register_endpoint.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            
            if (response === "success") {
                alert("Registration successful");
                window.location.href = "login.php";
            } else {
                alert("Registration failed: " + response);
            }
        }
    };

    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
    return false; 
}
