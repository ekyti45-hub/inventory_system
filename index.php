<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Sistem Inventariss</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-box">
    <h2>Login Inventaris</h2>
    <form action="auth/login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun? <a href="auth/register.php">Daftar di sini</a></p>
  </div>
</body>
</html>