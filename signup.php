<?php
session_start();
include 'config.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm) {
        $error = 'Passwords do not match.';
    } elseif (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^A-Za-z0-9]/', $password)) {
        $error = 'Password: 8+ chars, uppercase, number, special char.';
    } else {
        $conn = getDB();
        $stmt = $conn->prepare("SELECT id FROM profiles WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $error = 'Email already registered.';
        } else {
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            $user_id = bin2hex(random_bytes(16));
            $stmt = $conn->prepare("INSERT INTO profiles (id, email, password_hash, created_at) VALUES (?, ?, ?, NOW())");
            $stmt->bind_param("sss", $user_id, $email, $hashed_pass);
            if ($stmt->execute()) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('Location: index.php');
                exit;
            } else {
                $error = 'Signup failed: ' . $conn->error;
            }
        }
        $conn->close();
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - TechVault</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="icon" href="images/logo1.png" type="image/png" style="width: auto;height: inherit;">
  <link rel="stylesheet" href="signupdesign.css">
</head>
<body>
  <div class="signup-container">
    <div class="signup-box">
      <h2>Create Your Account</h2>
      <p>Join us and secure your digital assets.</p>
      <?php if (!empty($error)): ?>
        <div class="error">
          <div class="error__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"></path></svg>
          </div>
          <div class="error__title"><?= htmlspecialchars($error) ?></div>
          <div class="error__close" id="error__close"><svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20"><path fill="#393a37" d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"></path></svg>
          </div>
        </div>
      <?php endif; ?>
      
      <form method="POST" action="signup.php">
        
        <label>Email Address</label>
        <input type="email" placeholder="kevin@example.com" required name="email">
        
        <label>Password</label>
        <input type="password" placeholder="Secure password" required name="password">
        
        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm password" required name="confirm">
        
        <button type="submit" class="signup-btn">Sign Up</button>
     
   
      
      <p class="login-text">
        Already have an account? <a href="login.php">Log in</a>
      </p>
    </div>
  </div>
  <script>
    $('#error__close').click(function() {
        $('.error').hide();
    });



    $(document).ready(function() {
      $('form').submit(function(e) {
        var pass = $('input[name="password"]').val();
        var confirm = $('input[name="confirm"]').val();

        if (pass !== confirm) {
          alert('Passwords do not match.');
          e.preventDefault();
          return;
        }
        if (pass.length < 8) {
          alert('Password must be at least 8 characters.');
          e.preventDefault();
          return;
        }
        if (!/[A-Z]/.test(pass)) {
          alert('Password must contain an uppercase letter.');
          e.preventDefault();
          return;
        }
        if (!/[0-9]/.test(pass)) {
          alert('Password must contain a number.');
          e.preventDefault();
          return;
        }
        if (!/[^A-Za-z0-9]/.test(pass)) {
          alert('Password must contain a special character.');
          e.preventDefault();
        }
      });
    });
  </script>
</body>
</html>