<?php
include '../login/auth.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $table = 'user';

 

    register($table, $name, $username, $password);

    header('location: http://localhost/php-front/login/index.php');




    echo "Registration successful for " . htmlspecialchars($name);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Laundry's Register</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-9 max-w-lg w-full">
        <h1 class="text-2xl font-bold text-blue-600 text-center mb-6">LAUNDRY'SS REGISTER</h1>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Enter your name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" name="username"  class="w-full border    border-gray-300 rounded-lg p-2" placeholder="Enter your username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Enter your password" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                <input type="password" name="confirm_password" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Confirm your password" required>
            </div>
         
            <button type="submit" class="bg-blue-600 text-white font-semibold rounded-lg py-2 w-full hover:bg-blue-700">REGISTER</button>
            
        </form>
    </div>
</body>
</html>
