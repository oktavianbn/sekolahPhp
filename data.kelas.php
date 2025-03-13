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
<body class="w-screen h-max flex flex-col justify-center items-center bg-gradient-to-r from-blue-400 to-purple-500 p-8 min-h-screen">
    <h2 class="text-3xl font-extrabold text-white mb-6 shadow-md">Data Agama</h2>
    <div class="overflow-hidden rounded-xl shadow-2xl bg-white p-6 w-full max-w-3xl">
        <table class="w-full text-center border-collapse rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                    <th class="p-4 border">No</th>
                    <th class="p-4 border">ID Agama</th>
                    <th class="p-4 border">Nama Agama</th>
                    <th class="p-4 border">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($db->tampil_data_agama() as $a){
                    ?>
                <tr class="odd:bg-gray-100 even:bg-gray-200 hover:bg-gray-300 transition">
                    <td class="p-4 border font-semibold text-gray-700"><?php echo $no++; ?></td>
                    <td class="p-4 border font-semibold text-gray-700"><?php echo $a['kode_agama']; ?></td>
                    <td class="p-4 border font-semibold text-gray-700"><?php echo $a['nama_agama']; ?></td>
                    <td class="p-4 border"> 
                        <a href="edit.agama.php?id=<?php echo $a['kode_agama']; ?>&aksi=edit" class="text-blue-600 hover:text-blue-800 font-semibold">Edit</a> |
                        <a href="proses.agama.php?id=<?php echo $a['kode_agama']; ?>&aksi=hapus" class="text-red-600 hover:text-red-800 font-semibold">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="tambah.agama.php" class="mt-6 px-8 py-3 bg-green-600 text-white font-bold rounded-full shadow-lg hover:bg-green-700 transition duration-300">Tambah Data Agama</a>
</body>
</html>