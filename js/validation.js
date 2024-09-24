function validateLoginForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;
    
    if (email == "" || password == "") {
        alert("Email and Password must be filled out");
        return false;
    }
}

function validateRegisterForm() {
    var email = document.forms["registerForm"]["email"].value;
    var password = document.forms["registerForm"]["password"].value;
    
    if (email == "" || password == "" || password.length < 6) {
        alert("Email must be valid and password at least 6 characters long");
        return false;
    }
}
