<?php
    include 'koneksi.php';
    $db = new database();
    
    if (isset($_POST['simpan'])) {
        $db->input_data_siswa(
            $_POST['NISN'], 
            $_POST['Nama'], 
            $_POST['JenisKelamin'], 
            $_POST['Jurusan'], 
            $_POST['Kelas'],  
            $_POST['Alamat'], 
            $_POST['Agama'], 
            $_POST['NoHp']
        );
        header("Location: data.siswa.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body class="w-screen h-max flex flex-col justify-center items-center">
    <h1 class="flex items-center">Form Pengisian</h1>
    <form class="border-2 border-solid w-max bg-blue-300 m-10 p-4" action="" method="post">
        <label for="NISN">NISN</label><br>
        <input class="border border-solid p-1" type="text" name="NISN" id="NISN" placeholder="NISN" required><br>

        <label for="Nama">Nama</label><br>
        <input class="border border-solid p-1" type="text" name="Nama" id="Nama" placeholder="Nama" required><br>

        <label>Jenis Kelamin</label><br>
        <input type="radio" name="JenisKelamin" id="laki-laki" value="L" required>
        <label for="laki-laki">Laki-laki</label>

        <input type="radio" name="JenisKelamin" id="perempuan" value="P" required>
        <label for="perempuan">Perempuan</label><br>

        <label for="Jurusan">Jurusan</label><br>
        <input class="border border-solid p-1" type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan" required><br>

        <label for="Kelas">Kelas</label><br>
        <input class="border border-solid p-1" type="text" name="Kelas" id="Kelas" placeholder="Kelas" required><br>

        <label for="Alamat">Alamat</label><br>
        <input class="border border-solid p-1" type="text" name="Alamat" id="Alamat" placeholder="Alamat" required><br>

        <label for="Agama">Agama</label><br>
        <input class="border border-solid p-1" type="text" name="Agama" id="Agama" placeholder="Agama" required><br>

        <label for="NoHp">No HP</label><br>
        <input class="border border-solid p-1" type="text" name="NoHp" id="NoHp" placeholder="No Hp" required><br>

        <input class="border border-solid p-2 mt-2 bg-blue-500 text-white cursor-pointer" type="submit" name="simpan" value="Simpan" >
    </form>
</body>
</html>
