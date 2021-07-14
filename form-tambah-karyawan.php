<?php 
  include 'koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lembur.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Tambah Karyawan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <a class="navbar-brand upper text-white" href="dashboard.php">
        <h8>Sistem Lembur Politeknik Negeri Batam</h8></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="icon ml-2">
            <h5>
                <a href="logout.php" button class="btn btn-outline-success my-0 my-sm-0 bg-white" type="logout">Logout</button></a>
            </h5>
            </div>
            </form>
        </div>
    </nav>
    <?php include 'template/sidebar.php'; ?>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-users mr-2"></i> Input Data Baru</h3>
            <hr>
            <form action="simpan_karyawan.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>NIK</label>
                        <input type="text" name="NIK" class="form-control" id="NIK">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>No.HP</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while($data = mysqli_fetch_array($sql)) {?>
                        <option value="<?= $data['id_kategori'] ?>"><?= $data['id_kategori']?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>No.Rekening</label>
                        <input type="text" name="rekening" class="form-control" id="rekening">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">select role</label>
                    <select class="form-control" id="role" name="role">
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM role_user");
                        while($data = mysqli_fetch_array($sql)) {?>
                        <option value="<?= $data['id'] ?>"><?= $data['role']?></option>
                    <?php } ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</body>

</html>