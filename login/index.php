<?php
session_start();
include "aksi_login.php";

$result = null;

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Query hanya berdasarkan username
    $result  = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);
    if($row){
        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role']; // pastikan nama kolom di DB adalah 'level'
            $_SESSION['login'] = true;
            if($row['role'] == 'admin'){
                header("Location: ../dashboard_admin/dashboard.php");
            } elseif($row['role'] == 'kasir'){
                header("Location: /php-front/user/index.php");
            }
            exit();
        } else {
            $error_message = "Password salah!";
        }
    } else {
        $error_message = "Username tidak ditemukan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry's Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-xl rounded-2xl p-10 max-w-md w-full">
            <h1 class="text-3xl font-extrabold text-blue-700 text-center mb-2 tracking-wide">LAUNDRY'S LOGIN</h1>
            <p class="text-center text-gray-500 mb-6">Masuk untuk melanjutkan</p>
            <form class="space-y-5" method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <input type="text" id="username" name="username" class="border border-gray-300 rounded-md w-full px-10 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition" placeholder="Enter your username" autocomplete="username" required>
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm0 2c-2.67 0-8 1.337-8 4v3h16v-3c0-2.663-5.33-4-8-4z"/>
                            </svg>
                        </span>
                        <input name="password" type="password" id="password" class="border border-gray-300 rounded-md w-full px-10 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition" placeholder="Enter your password" autocomplete="current-password" required>
                    </div>
                </div>
                <div class="flex flex-col gap-3 mt-4">
                    <button type="submit" name="submit" class="w-full bg-blue-600 text-white rounded-md px-4 py-2 font-semibold text-lg shadow hover:bg-blue-700 transition">LOGIN</button>
                    <a href="/php-front/register/index.php" class="w-full bg-white border border-blue-600 text-blue-600 rounded-md px-4 py-2 font-semibold text-lg text-center shadow hover:bg-blue-50 transition">REGISTER</a>
                </div>
            </form>
            <?php 
            if(isset($error_message)): ?>
                <p class="text-red-500 text-center mt-6 font-semibold"><?php echo $error_message; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>