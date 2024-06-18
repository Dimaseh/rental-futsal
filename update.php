<?php
// Koneksi
include('connection.php');

// Mengambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$durasi = $_POST['durasi'];
$no_lapangan = $_POST['no_lapangan'];
$harga = $_POST['harga'];

// Update semua data dari form ke database
$update = mysqli_query($connect, "UPDATE booking SET nama='$nama', no_telepon='$no_telepon', tanggal='$tanggal', waktu='$waktu', durasi='$durasi', no_lapangan='$no_lapangan', harga='$harga' WHERE id='$id' ");

// Event Handler
if ($update) {
    echo "<script>alert('Data telah terupdate!'); window.location.replace('admin.php');</script>";
} else {
    echo "Gagal update data...";
}

?>