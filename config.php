<?php

//koneksi login
$host = "localhost";
$username = "root";
$password = "";
$database ="penyewa";


//koneksi database 
$db=mysqli_connect("localhost","root","", "penyewa");

if(!$db){
    die("koneksi gagal: ") . mysqli_connect_error();
}
//membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

//memeriksa koneksi
if ($conn->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
}else {
    echo "Koneksi Berhasil";
}

