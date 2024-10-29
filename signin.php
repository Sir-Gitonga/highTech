<?php
session_start();
include 'connect.php';

if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];

    // Check if email exists
    $select = "SELECT * FROM hightech WHERE email = ?";
    $stmt = mysqli_prepare($conn, $select);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Verify password
        if(password_verify($pass, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_fullname'] = $row['fullName'];
            
            // Handle "Remember Me" functionality
            if(isset($_POST['rememberMe'])) {
                $token = bin2hex(random_bytes(16));
                setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/');
                
                // Store the token in the database (you'll need to add a 'remember_token' column to your user_form table)
                $update = "UPDATE hightech SET remember_token = ? WHERE id = ?";
                $stmt = mysqli_prepare($conn, $update);
                mysqli_stmt_bind_param($stmt, "si", $token, $row['id']);
                mysqli_stmt_execute($stmt);
            }
            
            header('location: hightechlab.php'); // Redirect to  home page
            exit();
        } else {
            $error = 'Incorrect email or password!';
        }
    } else {
        $error = 'Incorrect email or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighTech Quantum - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containers">
        <div class="welcome-panel">
            <h2>Hello, welcome back!</h2>
            <p>Enter your personal details and start your journey <br>with us</p>
        </div>
        <div class="form-panel">
            <h2>Sign In</h2>
            <?php
            if(isset($error)){
                echo '<span class="error-msg">'.$error.'</span>';
            }
            ?>
            <form id="signinForm" action="" method="post">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <div class="input-group" style="align-items: center;">
                    <input type="checkbox" id="rememberMe" name="rememberMe" style="width: auto; margin-right: 8px;">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <input type="submit" name="submit" value="Login Now" class="form-btn">
            </form>
            <a href="#" class="toggle-text">Forgot Password?</a>
            <div class="social-login">
                <p>Or sign in with:</p>
                <div class="social-iconz">
                    <button class="socia-btn"><i class="fab fa-google"></i></button>
                    <button class="socia-btn"><i class="fab fa-facebook-f"></i></button>
                    <button class="socia-btn"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
            <a href="signup.php" class="toggle-text">Don't have an account? Sign Up</a>
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