<?php

use Dom\Text;

class database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "data_sekolah_db";
    private $koneksi;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if ($this->koneksi) {
            // echo "Koneksi berhasil dan database ditemukan";
        } else {
            echo "Koneksi gagal: " . mysqli_connect_error();
            return;
        }
    }
    function login() {}
    

    function tampil_data_siswa()
    {
        $data_siswa = mysqli_query($this->koneksi, "SELECT 
        s.id_siswa, 
        s.nisn, 
        s.nama_siswa, 
        s.jenis_kelamin, 
        s.kelas, 
        j.nama_jurusan AS jurusan,
        a.nama_agama AS agama,
        s.alamat, 
        s.no_telp
        FROM siswa s
        JOIN jurusan j ON s.jurusan = j.id_jurusan
        JOIN agama a ON s.agama = a.id_agama");
        $hasil = array();
        while ($d = mysqli_fetch_array($data_siswa)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tampil_data_agama()
    {
        $data_agama = mysqli_query($this->koneksi, "SELECT * FROM agama");
        $hasil = array();
        while ($d = mysqli_fetch_array($data_agama)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tampil_data_jurusan()
    {
        $data_jurusan = mysqli_query($this->koneksi, "SELECT * FROM jurusan");
        $hasil = array();
        while ($d = mysqli_fetch_array($data_jurusan)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input_data_siswa($nisn, $nama_siswa, $jenis_kelamin, $jurusan, $kelas, $alamat, $agama, $no_telp)
    {
        mysqli_query($this->koneksi, "INSERT INTO siswa 
    (nisn, nama_siswa, jenis_kelamin, jurusan, kelas, alamat, agama, no_telp) 
    VALUES 
    ('$nisn', '$nama_siswa', '$jenis_kelamin', '$jurusan', '$kelas', '$alamat', '$agama', '$no_telp')");
    }

    function edit_data_siswa($id_siswa)
    {
        $data_siswa = mysqli_query($this->koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
        return mysqli_fetch_array($data_siswa);
    }
    function tambah_agama($nama_agama)
    {
        mysqli_query($this->koneksi, "INSERT INTO agama (nama_agama) VALUES ('$nama_agama')");
    }
    function tambah_jurusan($nama_jurusan)
    {
        mysqli_query($this->koneksi, "INSERT INTO jurusan (nama_jurusan) VALUES ('$nama_jurusan')");
    }
    function tampilJumlahSiswa()
    {
        $data = mysqli_query($this->koneksi, "SELECT COUNT(*) AS total FROM siswa");
        $hasil = mysqli_fetch_assoc($data);
        return $hasil['total'];
    }
    function tampilJumlahJurusan()
    {
        $data = mysqli_query($this->koneksi, "SELECT COUNT(*) AS total FROM jurusan");
        $hasil = mysqli_fetch_assoc($data);
        return $hasil['total'];
    }
    function tampilJumlahAgama()
    {
        $data = mysqli_query($this->koneksi, "SELECT COUNT(*) AS total FROM agama");
        $hasil = mysqli_fetch_assoc($data);
        return $hasil['total'];
    }
    function hapusData($table, $id)
    {
        $data = mysqli_query($this->koneksi, "DELETE FROM $table WHERE $id");
    }
}
