<?php
include 'connect.php';

if(isset($_POST['submit'])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    // Check if email or username already exists
    $select = "SELECT * FROM hightech WHERE email = '$email' OR username = '$username'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists! kindly Login';
    } else {
        if($pass != $cpass) {
            $error[] = 'Password and confirm password do not match!';
        } else {
            // Hash the password using PASSWORD_BCRYPT
            $hashed_password = password_hash($pass, PASSWORD_BCRYPT);
            
            // Insert new user with hashed password
            $insert = "INSERT INTO hightech(fullName, username, email, phone, password) 
                       VALUES('$fullName', '$username', '$email', '$phone', '$hashed_password')";
            
            if(mysqli_query($conn, $insert)) {
                header('location: signin.php');
                exit();
            } else {
                $error[] = 'Registration failed!';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighTech Quantum - Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containers">
        <div class="welcome-panel">
            <h2>Create Account</h2>
            <p>To keep connected with us please login with your personal info</p>
        </div>
        <div class="form-panel">
            <h2>Sign Up</h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            };
            ?>
            <form id="signupForm" action="" method="post">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fullName" placeholder="Full Name" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user-circle"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('confirmPassword')"></i>
                </div>
                <input type="submit" name="submit" value="Sign Up Now" class="form-btn">
            </form>
            <div class="social-login">
                <p>Or sign up with:</p>
                <div class="social-iconz">
                    <button class="socia-btn"><i class="fab fa-google"></i></button>
                    <button class="socia-btn"><i class="fab fa-facebook-f"></i></button>
                    <button class="socia-btn"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
            <a href="signin.php" class="toggle-text">Already have an account? Log In</a>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const icon = passwordInput.nextElementSibling;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>
</html>