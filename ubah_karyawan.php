<?php
    include 'koneksi.php';
    include 'kepalaUnitFilter.php';

$NIK = $_GET['NIK_karyawan'];
$result = mysqli_query($koneksi, "SELECT * FROM user where NIK = '$NIK'");
while($user_data = mysqli_fetch_array($result)) {
    $nama = $user_data['nama'];
    $unit = $user_data['unit'];
    $telp = $user_data['telp'];
    $kategori = $user_data['kategori'];
    $rekening = $user_data['rekening'];}
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
    <title>Ubah Karyawan</title>
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
            <h3><i class="fas fa-users mr-2"></i> Ubah Data Karyawan</h3>
            <hr>
            <form action="edit_karyawan.php" method="post">
                <input type="readonly" name="NIK" style="display:none" class="form-control" id="NIK" value="<?php echo $NIK;?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama"value="<?php echo $nama;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit"value="<?php echo $unit;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>No.HP</label>
                        <input type="text" name="telp" class="form-control" id="telp"value="<?php echo $telp;?>">
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
                        <input type="text" name="rekening" class="form-control" id="rekening" value="<?php echo $rekening;?>">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</body>

</html>