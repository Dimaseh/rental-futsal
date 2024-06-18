<?php
// Koneksi
include('connection.php');

// Menyimpan semua nilai query string ke variabel
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$durasi = $_POST['durasi'];
$no_lapangan = $_POST['no_lapangan'];
$harga = $_POST['harga'];

// Menambahkan ke database
$insert = mysqli_query($connect, "INSERT INTO booking SET nama='$nama', no_telepon='$no_telepon', tanggal='$tanggal', waktu='$waktu', durasi='$durasi', no_lapangan='$no_lapangan', harga='$harga' ");

// Event Handler
if ($insert) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location.replace('booking.php');</script>";
} else {
    echo "Data gagal ditambahkan...";
}

?>