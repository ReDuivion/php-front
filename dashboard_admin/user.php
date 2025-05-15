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
                <li><a href="/php-front/dashboard_admin/pesanan.php" class="font-bold">Pesanan</a></li>
                <li><a href="/php-front/dashboard_admin/input_pelanggan.php" class="font-bold">Input Pelanggan</a></li>
                <li><a href="/php-front/dashboard_admin/outlet.php" class="font-bold">Outlet</a></li>
                <li><a href="" class="font-bold text-black">User</a></li>
                <li><a href="" class="font-bold">Histori</a></li>
            </ul>
            
        </div>

        <table class="min-w-full bg-white border border-gray-300 rounded-md shadow mb-1.5">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                    <th class="p-2 border-b">Nama User</th>
                    <th class="p-2 border-b">Username</th>
                    <th class="p-2 border-b">Status</th>
                    <th class="p-2 border-b">Password</th>
                    <th class="p-2 border-b">Roles</th>
                    <th class="p-2 border-b">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border-b text-center">Badrul</td>
                    <td class="p-2 border-b text-center">Kasir1</td>
                    <td class="p-2 border-b text-center"><span class="text-green-500">ONLINE</span></td>
                    <td class="p-2 border-b text-center">satudutiga</td>
                    <td class="p-2 border-b text-center">Kasir</td>
                    <td class="p-2 border-b">
                        <a href="" class="text-orange-500 text-right">Logout</a>  
                        <a href="" class="text-red-500 text-right">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6">
            <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="toggleModal()">Tambah User</button>
        </div>
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Tambah User</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama User</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan nama user" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Password User</label>
                        <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan password" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama Outlet</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan nama outlet" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Role User</label>
                        <select class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                            <option>Admin</option>
                            <option>Kasir</option>
                            <option>Owner</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah User</button>
                    <button type="button" class="ml-7 text-gray-500" onclick="toggleModal()">X</button>
                </form>
            </div>
        </div>

        <script>
        function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }
    </script>


    </main>
</body>
</html>