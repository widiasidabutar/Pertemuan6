<?php
include ("koneksi.php");
$nim = $_POST['txtnim'] ;
$nama = $_POST['txtnama'] ;
$jenkel = $_POST['txtjenkel'] ;
$lahir = $_POST['txtlahir'] ;
$hp = $_POST['txthp'] ;

//
$sql = "insert into mahasiswa values ('$nim', '$nama', '$jenkel',
'$lahir', '$hp')";

$proses = mysqli_query($koneksi, $sql);
if($proses){
    header("location:tampil.php");
}

?>