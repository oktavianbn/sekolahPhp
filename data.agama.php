<?php
include 'koneksi.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Agama</title>
</head>
<body class="w-screen h-max flex flex-col justify-center items-center bg-gray-100 p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Data Agama</h2>
    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="table-auto border-collapse w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">ID Agama</th>
                    <th class="p-3 border">Nama Agama</th>
                    <th class="p-3 border">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($db->tampil_data_agama() as $a){
                    ?>
                <tr class="text-gray-700 text-center odd:bg-gray-50 even:bg-gray-200">
                    <td class="p-3 border"><?php echo $no++; ?></td>
                    <td class="p-3 border"><?php echo $a['kode_agama']; ?></td>
                    <td class="p-3 border"><?php echo $a['nama_agama']; ?></td>
                    <td class="p-3 border">
                        <a href="edit.agama.php?id=<?php echo $a['kode_agama']; ?>&aksi=edit" class="text-blue-600 hover:underline">Edit</a> |
                        <a href="proses.agama.php?id=<?php echo $a['kode_agama']; ?>&aksi=hapus" class="text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="tambah.agama.php" class="mt-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">Tambah Data Agama</a>
</body>
</html>