<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php

// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server="localhost:3308";
$username="root";
$password="";
$database="modul3_wad";


$connect= new mysqli($server,$username,$password,$database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect->connect_error) 
    
  
  echo "Koneksi Gagal ; [Keasalahan Koneksi]: ";

?>
