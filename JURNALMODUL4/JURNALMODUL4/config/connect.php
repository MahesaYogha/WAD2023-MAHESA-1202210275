<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 
$server="localhost:3308";
$username="root";
$password="";
$database="modul4wad";


$conn= new mysqli($server,$username,$password,$database);
// 
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

// 
 if (!$conn){
    die('Koneksi gagal:'. mysqli_connet_error() );
 }

?>