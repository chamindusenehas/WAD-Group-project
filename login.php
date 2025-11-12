<?php
session_start();
include 'config.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $conn = getDB();
    $stmt = $conn->prepare("SELECT id, email, password_hash FROM profiles WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password_hash'] = $password;
            header('Location: index.php');
            exit;
        } else {
            $error = 'Invalid credentials.';
        }
    } else {
        $error = 'Invalid credentials.';
    }
    $conn->close();
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SkillSprint</title>
  <link rel="stylesheet" href="logindesign.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="icon" href="images/logo1.png" type="image/png" style="width: auto;height: inherit;">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>Log in to <span>SkillSprint</span></h2>
      <p>Enter your credentials to access your secure account.</p>
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
      
      <form method="POST" action="login.php">
        <label>Email</label>
        <input type="text" placeholder="examplemail@gmail.com" required name="email">
        <label for="password" >Password</label>
        <input type="password"  required name="password">
        
        <button type="submit" class="login-btn">Login</button>
      </form>
      
      <p class="signup-text">Don't have an account? <a href="signup.php">Create an account</a></p>
    </div>
  </div>
  <script>
    $('#error__close').click(function() {
        $('.error').hide();
    });
    </script>
</body>

</html>