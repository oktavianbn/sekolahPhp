<!-- <!DOCTYPE html>
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

        <input class="border border-solid p-2 mt-2 bg-blue-500 text-white cursor-pointer" type="submit" name="simpan" value="Simpan">
    </form>
</body> -->

<?php
include 'koneksi.php';
$db = new database();

if (isset($_POST['simpan'])) {
    $db->input_data_siswa(
        nisn: $_POST['nisn'],
        nama_siswa: $_POST['nama_siswa'],
        jenis_kelamin: $_POST['jenis_kelamin'],
        jurusan: $_POST['jurusan'],
        kelas: $_POST['kelas'],
        alamat: $_POST['alamat'],
        agama: $_POST['agama'],
        no_telp: $_POST['no_telp']
    );
    header("Location: data.siswa.php");
}
?>
<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | General Form Elements</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | General Form Elements" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <?php include "navbar.php"; ?>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <?php include "sidebar.php"; ?>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">General Form</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">General Form</li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row g-4">
                        <!--begin::Col-->
                        <div class="col-12">
                            <div class="callout callout-info">
                                For detailed documentation of Form visit
                                <a
                                    href="https://getbootstrap.com/docs/5.3/forms/overview/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="callout-link">
                                    Bootstrap Form
                                </a>
                            </div>
                        </div>
                        <!--begin::Form Validation-->
                        <form class="needs-validation" novalidate method="post">
                            <div class="card-body">
                                <div class="row g-3">

                                    <!-- NISN -->
                                    <div class="col-md-6">
                                        <label for="nisn" class="form-label">NISN</label>
                                        <input type="text" class="form-control" id="nisn" name="nisn" required />
                                        <div class="invalid-feedback">Tolong isi NISN.</div>
                                    </div>

                                    <!-- Nama Lengkap -->
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required />
                                        <div class="invalid-feedback">Tolong isi nama lengkap.</div>
                                    </div>

                                    <!-- Nomor Telepon -->
                                    <div class="col-md-6">
                                        <label for="nohp" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" required />
                                        <div class="invalid-feedback">Tolong isi nomor telepon.</div>
                                    </div>

                                    <!-- Alamat -->
                                    <div class="col-md-6">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required />
                                        <div class="invalid-feedback">Tolong isi alamat.</div>
                                    </div>

                                    <!-- Jenis Kelamin -->
                                    <div class="col-md-6">
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" id="jk" name="jenis_kelamin" required>
                                            <option selected disabled value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">Tolong pilih jenis kelamin.</div>
                                    </div>

                                    <!-- Kelas -->
                                    <div class="col-md-6">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <select class="form-select" id="kelas" name="kelas" required>
                                            <option selected disabled value="">Pilih Kelas</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                        <div class="invalid-feedback">Tolong pilih kelas.</div>
                                    </div>

                                    <!-- Jurusan -->
                                    <div class="col-md-6">
                                        <label for="jurusan" class="form-label">Jurusan</label>
                                        <select class="form-select" id="jurusan" name="jurusan" required>
                                            <option selected disabled value="">Pilih Jurusan</option>
                                            <?php
                                            foreach ($db->tampil_data_jurusan() as $s) {
                                            ?>
                                                <option class="text-black" value=<?= $s['id_jurusan'] ?>><?= $s['nama_jurusan'] ?></option>
                                            <?php
                                            }; ?>
                                        </select>
                                        <div class="invalid-feedback">Tolong pilih jurusan.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select class="form-select" id="agama" name="agama" required>
                                            <option selected disabled value="">Pilih Agama</option>
                                            <?php
                                            foreach ($db->tampil_data_agama() as $s) {
                                            ?>
                                                <option class="text-black" value=<?= $s['id_agama'] ?>><?= $s['nama_agama'] ?></option>
                                            <?php
                                            }; ?>
                                        </select>
                                        <div class="invalid-feedback">Tolong pilih agama.</div>
                                    </div>

                                    <!-- Konfirmasi -->
                                    <div class="col-12">

                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit" name="simpan">Submit form</button>
                            </div>
                        </form>

                        <!--end::Form Validation-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
    </div>
    <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
            Copyright &copy; 2014-2024&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
</body>
<!--end::Body-->

</html>