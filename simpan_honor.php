<?php 
    include('koneksi.php');

    $username = $_POST['username'];
    $kegiatan = $_POST['kegiatan'];
    $tanggal = $_POST['tanggal'];
    $istirahat = $_POST['istirahat'];
    $jam_lembur = $_POST['jam_lembur'];
    $jml_jam_lembur = $jam_lembur - $istirahat;
    $uang_makan = $_POST['uang_makan'];

    $input = mysqli_query($koneksi,"INSERT INTO honor (username, kegiatan, tanggal, jam_lembur, istirahat, jml_jam_lembur, uang_makan) VALUES('$username','$kegiatan','$tanggal','$jam_lembur','$istirahat','$jml_jam_lembur','$uang_makan')") or die(mysqli_error($koneksi));
    if($input){
        echo "Data Berhasil Disimpan";
        header("location:data-honor.php"); 
    }else{
        echo "Gagal Disimpan";
    }   
?>