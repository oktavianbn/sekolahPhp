<?php
include 'koneksi.php';
$db = new database();

if (isset($_POST['simpan'])) {
    $db->tambah_jurusan(
        $_POST['nama_jurusan']
    );
    header("Location: data.kelas.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="flex justify-center items-center">
<div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-semibold text-center mb-4">Tambah jurusan</h2>
        <form action="" method="POST">
            <label for="nama_jurusan" class="block text-sm font-medium text-gray-700">Nama jurusan:</label>
            <input type="text" id="nama_jurusan" name="nama_jurusan"
                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                required>

            <button type="submit" name="simpan"
                class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </form>
    </div>
</body>

</html>