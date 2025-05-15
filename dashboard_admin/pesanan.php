<?php 
session_start();
include "../database.php";
// Hapus semua variabel session
 if(!isset($_SESSION["login"])){
     header("location: /php-front/login/index.php");
     exit;
}
$pesanan = "SELECT * FROM tb_paket";
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
            <a href="/php-front/login/index.php" class="bg-red-600 px-4 py-2 rounded hover:bg-red-700 font-bold" type="submit">Logout</a>
        </div>
    </header>
    
    <div class="flex flex-row">

            <h2 class="text-3xl font-bold text-blue-700 text-left mt-0.5">LAUNDRY’SS ADMIN</h2>
            <nav class="my-2">

            <ul class="flex justify-around gap-20 text-blue-700">
                <li><a href="/php-front/dashboard_admin/dashboard.php" type="button" class="ml-10 font-bold">Dashboard</a></li>
                <li><a href="/php-front/dashboard_admin/pesanan.php" class="font-bold text-black">Pesanan</a></li>
                <li><a href="/php-front/dashboard_admin/input_pelanggan.php" class="font-bold">Input Pelanggan</a></li>
                <li><a href="/php-front/dashboard_admin/outlet.php" class="font-bold">Outlet</a></li>
                <li><a href="/php-front/dashboard_admin/user.php" class="font-bold">User</a></li>
                <li><a href="" class="font-bold">Histori</a></li>
            </ul>
            
        </div>
        <div class="overflow-x-auto shadow-lg rounded-lg mx-auto py-10">
            <table class="min-w-full bg-white border border-blue-400">
                <thead>
                    <tr class="bg-white">
                        <th class="py-2 border">No. Antrian</th>
                        <th class="py-2 border">Outlet</th>
                        <th class="py-2 border">Nama Pelanggan</th>
                        <th class="py-2 border">Alamat</th>
                        <th class="py-2 border">Jenis Kelamin</th>
                        <th class="py-2 border">No.Telepon</th>
                        <th class="py-2 border">Paket</th>
                        <th class="py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <td class="border px-4 py-2">01</td>
                        <td class="border px-4 py-2">Pamili 22</td>
                        <td class="border px-4 py-2">Badrul Al Nasr</td>
                        <td class="border px-4 py-2">Kp.Tijengkang No.90</td>
                        <td class="border px-4 py-2">Laki-laki</td>
                        <td class="border px-4 py-2">08900129837</td>
                        <td class="border px-4 py-2">Kameja</td>
                        <td class="border px-4 py-2">
                        <a href="/php-front/dashboard_admin/edit_pesanan.php" type="button" class="w-full text-red-600 rounded-md px-4 py-2 text-left">Edit</a>
                        <a href="" type="button" class="w-full text-yellow-400 rounded-md px-4 py-2 text-inherit">Delete</a> 
                        </td>
                </tbody>
            </table>
        </div>

        <div class="flex justify-end mt-4">
            <a href="input_pelanggan.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Pelanggan</a>
        </div>
    </main>
</body>
</html>
