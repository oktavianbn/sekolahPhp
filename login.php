<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | MyApp</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center min-h-screen px-4">
  <div class="w-full max-w-md p-8 bg-white/80 backdrop-blur-md rounded-2xl shadow-2xl">
    <div class="flex flex-col items-center mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.657-1.343-3-3-3S6 9.343 6 11s1.343 3 3 3 3-1.343 3-3zm0 0c0-1.657 1.343-3 3-3s3 1.343 3 3-1.343 3-3 3-3-1.343-3-3z" />
      </svg>
      <h2 class="text-3xl font-bold text-gray-800">Masuk ke Akun</h2>
      <p class="text-sm text-gray-500">Selamat datang kembali 👋</p>
    </div>

    <?php if (isset($error)) echo "<div class='bg-red-500 text-white p-3 rounded-md text-center mb-4'>$error</div>"; ?>

    <form method="post" action="login.php" class="space-y-5">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" id="username" name="username" required class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
      </div>
      <div class="items-end text-sm">
        <a href="#" class="text-indigo-600 hover:underline">Lupa password?</a>
      </div>
      <button type="submit" name="login" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-200 shadow-md">Masuk</button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
      Belum punya akun?
      <a href="#" class="text-indigo-600 hover:underline font-medium">Daftar sekarang</a>
    </p>
  </div>
</body>
</html>
