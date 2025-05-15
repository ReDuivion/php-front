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
                <li><a href="/php-front/dashboard admin/dashboard.php" type="button" class="ml-10 font-bold">Dashboard</a></li>
                <li><a href="/php-front/dashboard admin/pesanan.php" class="font-bold text-black">Pesanan</a></li>
                <li><a href="" class="font-bold">Input Pelanggan</a></li>
                <li><a href="" class="font-bold">Outlet</a></li>
                <li><a href="/php-front/dashboard admin/user.php" class="font-bold">User</a></li>
                <li><a href="" class="font-bold">Histori</a></li>
            </ul>
            <p class="mb-4 text-gray-700">Pesanan/Edit</p>
        <form class="grid grid-cols-6 gap-4">
            <input type="text" placeholder="No.Antrian" class="col-span-1 border rounded p-2" value="" />
            <input type="text" placeholder="Outlet" class="col-span-1 border rounded p-2" value="" />
            <input type="text" placeholder="Nama Pelanggan" class="col-span-1 border rounded p-2" value="" />
            <input type="text" placeholder="Alamat" class="col-span-1 border rounded p-2" value="" />
            <select class="col-span-1 border rounded p-2">
                <option value="Laki-laki" selected>Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <input type="text" placeholder="No.Telepon" class="col-span-1 border rounded p-2" value="" />
            <input type="text" placeholder="Paket" class="col-span-1 border rounded p-2" value="" />
        </form>
        <div class="mt-6 flex justify-between">
            <a href ="/php-front/dashboard admin/pesanan.php" class="bg-yellow-500 text-white px-4 py-2 rounded">KEMBALI</a>    
            <a href ="/php-front/dashboard admin/pesanan.php" class="bg-blue-700 text-white px-4 py-2 rounded">SIMPAN</a>    
    </main>
    
</body>
</html>