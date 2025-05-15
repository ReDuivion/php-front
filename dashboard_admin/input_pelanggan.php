<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: /php-front/login/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Laundry</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-700 p-4 text-white">
        <div class="flex justify-between">
            <h1 class="font-bold text-3xl">Welcome, Admin</h1>
            <a href="#" class="bg-red-600 px-4 py-2 rounded hover:bg-red-700 font-bold">Logout</a>
        </div>
    </header>
    <main class="p-4">
        <div class="flex flex-row">

            <h2 class="text-3xl font-bold text-blue-700 text-left mt-0.5">LAUNDRY’SS ADMIN</h2>
            <nav class="my-2">

            <ul class="flex justify-around gap-20 text-blue-700">
                <li><a href="/php-front/dashboard_admin/dashboard.php" type="button" class="ml-10 font-bold">Dashboard</a></li>
                <li><a href="/php-front/dashboard_admin/pesanan.php" class="font-bold">Pesanan</a></li>
                <li><a href="" class="font-bold text-black">Input Pelanggan</a></li>
                <li><a href="/php-front/dashboard_admin/outlet.php" class="font-bold">Outlet</a></li>
                <li><a href="/php-front/dashboard_admin/user.php" class="font-bold">User</a></li>
                <li><a href="" class="font-bold">Histori</a></li>
            </ul>
            
        </div>
        <main class="my-6">
            <h3 class="text-xl font-bold mb-4">Tambah Pelanggan Laundry</h3>
            <form class="bg-white p-6 rounded shadow-md">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="No. Antrian" class="p-2 border border-gray-300 rounded" />
                    <select class="p-2 border border-gray-300 rounded">
                        <option>Outlet</option>
                        <option>Outlet 1</option>
                        <option>Outlet 2</option>
                    </select>
                    <input type="text" placeholder="Nama Pelanggan" class="p-2 border border-gray-300 rounded" />
                    <input type="text" placeholder="Alamat" class="p-2 border border-gray-300 rounded" />
                    <select class="p-2 border border-gray-300 rounded">
                        <option>Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                    <input type="text" placeholder="No.Telepon" class="p-2 border border-gray-300 rounded" />
                    <select class="p-2 border border-gray-300 rounded">
                        <option>Paket</option>
                        <option>Kameja</option>
                        <option>Baju</option>
                        <option>Selimut</option>
                    </select>
                </div>
                <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded">Tambahkan Pelanggan</button>
            </form>
        </main>
    </div>
</body>
</html>