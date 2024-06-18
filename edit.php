<?php
// Koneksi
include('connection.php');

// id dari query string
$id = $_GET['id'];

// Menampilkan data user yang dipilih
$query = mysqli_query($connect, "SELECT * FROM booking WHERE id='$id' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkuyFutsaL</title>
    <link href="img/logonew.png" rel="icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- my style -->
    <link rel="stylesheet" href="style.css" />
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet" />

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
                <a class="nav-link" href="admin.php">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="d-flex justify-content-center mt-5">
            <h2 class="text-primary fw-medium">Daftar Pengguna</h2>
        </div>

        <div class="d-flex justify-content-center mt-5">
           
         <!-- Floating Labels Form -->
         <form class="container row g-3" action="update.php" method="post">
         <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" required value="<?php echo $result[0]['nama']; ?>">
                    <label for="nama">Nama Pemesan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="telepon"
                     required value="<?php echo $result[0]['no_telepon']; ?>">
                    <label for="noTelepon">No Telepon</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="date"
                     required value="<?php echo $result[0]['tanggal']; ?>">
                    <label for="tanggal">Tanggal Pesan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="waktu" name="waktu" placeholder="time"
                     required value="<?php echo $result[0]['waktu']; ?>">
                    <label for="waktu">Waktu</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="durasi" name="durasi" placeholder="number"
                     required value="<?php echo $result[0]['durasi']; ?>">
                    <label for="durasi">Durasi Sewa</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="no_lapangan" name="no_lapangan" aria-label="State">
                        <option value="1" <?php echo ($result[0]['no_lapangan'] == "1") ? 'selected' : ''; ?>>Lapangan 1</option>
                        <option value="2" <?php echo ($result[0]['no_lapangan'] == "2") ? 'selected' : ''; ?>>Lapangan 2</option>
                        <option value="3" <?php echo ($result[0]['no_lapangan'] == "3") ? 'selected' : ''; ?>>Lapangan 3</option>
                    </select>
                    <label for="no_lapangan">Lapangan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="harga" name="harga" readonly
                     value="<?php echo $result[0]['harga']; ?>">
                    <label for="harga">Harga Bayar</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
        </div>
    </main>

    <!-- JS Bootstrap -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Otomatisasi Harga Sewa -->
    <script>
        document.getElementById("durasi").addEventListener("change", updateHarga);
        document.getElementById("no_lapangan").addEventListener("change", updateHarga);

        function updateHarga() {
            const durasi = document.getElementById("durasi").value;
            const no_lapangan = document.getElementById("no_lapangan").value;

            const hargaPerJam1 = 100000;
            const hargaPerJam2 = 80000;
            const hargaPerJam3 = 75000;

            let totalHarga = 0;

            if (no_lapangan == 1) {
                totalHarga = hargaPerJam1 * durasi
            } else if (no_lapangan == 2) {
                totalHarga = hargaPerJam2 * durasi 
            } else {
                totalHarga = hargaPerJam3 * durasi
            }

            document.getElementById("harga").value = totalHarga;
        }
    </script>
    <footer class="bg-primary footer-section py-3  fixed-bottom">
        <div class="text-center">
            <p class="mb-0 text-light">Copyright &copy;
                 2023 Developed by
                <a class="text-white text-decoration-none" href="https://wa.me/6281224429692">Dimas & Natan</a>
            </p>
        </div>
    </footer>
</body>

</html>