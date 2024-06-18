<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'connection.php';
?>
<?php
// Koneksi database
include('connection.php');

// Retrieve
$query = mysqli_query($connect, "SELECT * FROM booking");
// Mengubah ke array multidimensi
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SkuyFutsal</title>
    <link href="img/logonew.png" rel="icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- my style -->
    <link rel="stylesheet" href="style.css" />
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body>
  <header>
      <nav class="navbar navbar-expand-lg bg-dark shadow" data-bs-theme="light">
        <div class="container-fluid mx-5">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php">SkuyFutsaL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Navigasi -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://wa.me/6281224429692">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="d-flex justify-content-center mt-5">
      <div class="table-responsive col-10">
        <h1 class="text-primary fw-bold">Daftar Booking</h1>

        <div class="row mt-5">
        <div class="col-2">
            <!-- Fitur Retrieve/Tambah Data -->
            <a href="add.php"><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Data</button></a>
          </div>
          <div class="col">
            <!-- Fitur Reset Data -->
            <a href="reset.php" onclick="return confirm('Apakah kamu yakin akan mereset data ?');"><button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Reset Data</button></a>
          </div>
          <div class="col-3">
            <!-- Fitur Search -->
            <form class="input-group align-items-bottom" role="search" action="search.php" method="get">
              <input class="form-control" type="search" name="keyword" placeholder="Cari..." aria-label="Search" />
              <button class="btn btn-dark" type="submit">Cari</button>
            </form>
          </div>
        </div>

        <!-- Data -->
        <table class="table table-dark table-striped-columns text-white mt-3">
                <thead>
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Pemesan</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Lapangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Pilihan</th>
                  </tr>
                </thead>
          <tbody class="table-group-divider">
            <!-- Menampilkan data dari database yang diubah ke array multidimensi -->
            <?php foreach ($result as $key => $value) : ?>
            <tr class="text-center">
              <td class="px-2"><?php echo $key + 1; ?></td>
              <td class="px-2"><?php echo $value['nama']; ?></td>
              <td class="px-2"><?php echo $value['no_telepon']; ?></td>
              <td class="px-2"><?php echo $value['tanggal']; ?></td>
              <td class="px-2"><?php echo $value['waktu']; ?></td>
              <td class="px-4"><?php echo $value['durasi']; ?></td>
              <td class="px-5"><?php echo $value['no_lapangan']; ?></td>
              <td class="px-2"><?php echo $value['harga']; ?></td>
              <td class="px-2 col-2 text-center">
                <a href="edit.php?id=<?php echo $value['id'] ?>"><button type="submit" class="btn btn-success"><i class="bi bi-pencil"></i>Edit</button></a>
                <a href="delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Apakah kamu ingin menghapusnya ?');"><button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Hapus</button></a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </main>
    
    <footer class="bg-primary footer-section py-3  fixed-bottom">
        <div class="text-center">
            <p class="mb-0 text-light">Copyright &copy;
                 2023 Developed by
                <a class="text-white text-decoration-none" href="https://wa.me/6281224429692">Dimas & Natan</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
