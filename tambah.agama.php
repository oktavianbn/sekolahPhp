<?php
include 'koneksi.php';
$db = new database();

if (isset($_POST['simpan'])) {
    $db->tambah_agama(
        $_POST['nama_agama']
    );
    header("Location: data.agama.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Agama</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-semibold text-center mb-4">Tambah Agama</h2>
        <form action="" method="POST">
            <label for="nama_agama" class="block text-sm font-medium text-gray-700">Nama Agama:</label>
            <input type="text" id="nama_agama" name="nama_agama"
                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                required>

            <button type="submit" name="simpan"
                class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </form>
    </div>
</body>

</html>