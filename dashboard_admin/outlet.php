<?php
session_start();
if(!isset($_SESSION["login"])){
     header("location: /php-front/login/index.php");
     exit;
}
if(isset(($_POST["submit"]))){
    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $telepon = $_POST["Telepon"];

    // Koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "laundry");
    $query = "INSERT INTO tb_outlet (id_outlet, nama, alamat, telepon) VALUES ('', '$nama', '$alamat', '$telepon')";
    mysqli_query($db, $query);
    if(mysqli_affected_rows($db) > 0){
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
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
                <li><a href="/php-front/dashboard_admin/input_pelanggan.php" class="font-bold">Input Pelanggan</a></li>
                <li><a href="" class="font-bold text-black">Outlet</a></li>
                <li><a href="/php-front/dashboard_admin/user.php" class="font-bold">User</a></li>
                <li><a href="" class="font-bold">Histori</a></li>
            </ul>
            
        </div>
       
     <div class="container mx-auto mt-10">
        <form method="post" class="bg-white shadow-md rounded px-8 py-6">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama-outlet">
                    Nama Outlet
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama-outlet" type="text" text="Pamili 22" name="Nama">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat-outlet">
                    Alamat Outlet
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat-outlet" type="text" text="JL Tiserele Kompleks Matahari No.13, Bandung" name="Alamat">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="no-telepon">
                    No.Telepon
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="no-telepon" type="text" text="08972563561231" name="Telepon">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>